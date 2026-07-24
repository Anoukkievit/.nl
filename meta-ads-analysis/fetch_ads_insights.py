#!/usr/bin/env python3
"""Fetch Meta Ads performance data for the configured ad account.

Requires environment variables:
  META_ACCESS_TOKEN   - long-lived system user access token (ads_read)
  META_AD_ACCOUNT_ID  - ad account id, e.g. act_1234567890

Usage:
  python3 fetch_ads_insights.py [--date-preset last_3d] [--out reports/]
"""
import argparse
import json
import os
import sys
import urllib.parse
import urllib.request
from datetime import date, datetime

GRAPH_API_VERSION = "v21.0"
FIELDS = [
    "ad_id",
    "ad_name",
    "adset_name",
    "campaign_name",
    "spend",
    "impressions",
    "reach",
    "clicks",
    "ctr",
    "cpc",
    "cpm",
    "frequency",
    "actions",
    "cost_per_action_type",
]


def fetch_insights(access_token: str, ad_account_id: str, date_preset: str) -> dict:
    params = {
        "level": "ad",
        "fields": ",".join(FIELDS),
        "date_preset": date_preset,
        "access_token": access_token,
        "limit": "200",
    }
    url = f"https://graph.facebook.com/{GRAPH_API_VERSION}/{ad_account_id}/insights?{urllib.parse.urlencode(params)}"
    results = []
    while url:
        with urllib.request.urlopen(url) as resp:
            payload = json.load(resp)
        if "error" in payload:
            raise RuntimeError(f"Graph API error: {payload['error']}")
        results.extend(payload.get("data", []))
        url = payload.get("paging", {}).get("next")
    return {"date_preset": date_preset, "fetched_at": datetime.utcnow().isoformat(), "data": results}


def main():
    parser = argparse.ArgumentParser()
    parser.add_argument("--date-preset", default="last_3d", help="Meta date_preset, e.g. today, yesterday, last_3d, last_7d")
    parser.add_argument("--out", default="reports", help="output directory")
    args = parser.parse_args()

    access_token = os.environ.get("META_ACCESS_TOKEN")
    ad_account_id = os.environ.get("META_AD_ACCOUNT_ID")
    if not access_token or not ad_account_id:
        print("Missing META_ACCESS_TOKEN or META_AD_ACCOUNT_ID environment variables.", file=sys.stderr)
        sys.exit(1)

    payload = fetch_insights(access_token, ad_account_id, args.date_preset)

    os.makedirs(args.out, exist_ok=True)
    out_path = os.path.join(args.out, f"ads_insights_{date.today().isoformat()}.json")
    with open(out_path, "w") as f:
        json.dump(payload, f, indent=2)

    print(f"Wrote {len(payload['data'])} ad rows to {out_path}")


if __name__ == "__main__":
    main()
