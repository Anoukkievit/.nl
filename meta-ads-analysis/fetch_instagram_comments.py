#!/usr/bin/env python3
"""Fetch recent Instagram posts + comments for voice-of-customer analysis.

Requires environment variables:
  META_ACCESS_TOKEN  - long-lived system user access token
                        (instagram_basic, pages_read_engagement, instagram_manage_comments)
  META_IG_USER_ID    - Instagram Business Account id

Usage:
  python3 fetch_instagram_comments.py [--limit 25] [--out voice_of_customer/]
"""
import argparse
import json
import os
import re
import sys
import urllib.parse
import urllib.request
from collections import Counter
from datetime import date, datetime

GRAPH_API_VERSION = "v21.0"

STOPWORDS = set(
    """de het een en van in is dat op te met voor niet zijn aan ook maar er
    om dan zo als bij nog wel of dit die deze naar uit al te veel meer geen
    the a an and to of in is for on with your you i we it this that be are
    have has just so my me our""".split()
)


def graph_get(path: str, access_token: str, **params) -> dict:
    params = {**params, "access_token": access_token}
    url = f"https://graph.facebook.com/{GRAPH_API_VERSION}/{path}?{urllib.parse.urlencode(params)}"
    with urllib.request.urlopen(url) as resp:
        payload = json.load(resp)
    if "error" in payload:
        raise RuntimeError(f"Graph API error on {path}: {payload['error']}")
    return payload


def fetch_media(access_token: str, ig_user_id: str, limit: int) -> list:
    payload = graph_get(
        f"{ig_user_id}/media",
        access_token,
        fields="id,caption,timestamp,like_count,comments_count,permalink",
        limit=limit,
    )
    return payload.get("data", [])


def fetch_comments(access_token: str, media_id: str) -> list:
    comments = []
    payload = graph_get(f"{media_id}/comments", access_token, fields="text,username,timestamp,like_count", limit="100")
    comments.extend(payload.get("data", []))
    next_url = payload.get("paging", {}).get("next")
    while next_url:
        with urllib.request.urlopen(next_url) as resp:
            payload = json.load(resp)
        comments.extend(payload.get("data", []))
        next_url = payload.get("paging", {}).get("next")
    return comments


def word_frequencies(texts: list, top_n: int = 50) -> list:
    counter = Counter()
    for text in texts:
        words = re.findall(r"[a-zA-ZÀ-ÿ']+", text.lower())
        for w in words:
            if len(w) > 2 and w not in STOPWORDS:
                counter[w] += 1
    return counter.most_common(top_n)


def main():
    parser = argparse.ArgumentParser()
    parser.add_argument("--limit", type=int, default=25, help="number of recent posts to scan")
    parser.add_argument("--out", default="voice_of_customer", help="output directory")
    args = parser.parse_args()

    access_token = os.environ.get("META_ACCESS_TOKEN")
    ig_user_id = os.environ.get("META_IG_USER_ID")
    if not access_token or not ig_user_id:
        print("Missing META_ACCESS_TOKEN or META_IG_USER_ID environment variables.", file=sys.stderr)
        sys.exit(1)

    media_items = fetch_media(access_token, ig_user_id, args.limit)

    all_comments = []
    for media in media_items:
        comments = fetch_comments(access_token, media["id"])
        for c in comments:
            c["media_id"] = media["id"]
            c["media_permalink"] = media.get("permalink")
        all_comments.extend(comments)

    caption_texts = [m.get("caption", "") or "" for m in media_items]
    comment_texts = [c.get("text", "") or "" for c in all_comments]

    payload = {
        "fetched_at": datetime.utcnow().isoformat(),
        "media_count": len(media_items),
        "comment_count": len(all_comments),
        "media": media_items,
        "comments": all_comments,
        "top_words_captions": word_frequencies(caption_texts),
        "top_words_comments": word_frequencies(comment_texts),
    }

    os.makedirs(args.out, exist_ok=True)
    out_path = os.path.join(args.out, f"comments_{date.today().isoformat()}.json")
    with open(out_path, "w") as f:
        json.dump(payload, f, indent=2, ensure_ascii=False)

    print(f"Wrote {len(media_items)} posts / {len(all_comments)} comments to {out_path}")


if __name__ == "__main__":
    main()
