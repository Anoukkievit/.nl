# Meta Ads + Instagram analyse systeem

Dit mapje bevat de opzet voor:

1. **Dagelijkse update** van je Meta Ads performance.
2. **Elke 3 dagen** een vergelijking van je advertenties + minimaal 5 concrete iteratievoorstellen op de best/slechtst presterende ad.
3. **Doorlopende analyse van Instagram** (comments, captions, interacties) om terugkerende woorden en zinnen van je klanten te verzamelen — te gebruiken op je landingspagina en in advertentieteksten.

De scripts hier halen ruwe data op via de officiële Meta Graph API. Claude (in de chatsessie) interpreteert de output, schrijft de update/iteraties en werkt `VOICE_OF_CUSTOMER.md` en `ITERATION_LOG.md` bij.

## Wat ik van jou nodig heb

Om dit echt automatisch te laten draaien (zonder dat je zelf exports moet aanleveren) heb ik toegang nodig tot de Meta Graph API. Dat regel je zelf via Meta, ik kan dat niet voor je aanmaken:

1. **Facebook Developer app**: ga naar https://developers.facebook.com/apps → "Create App" → type "Business".
2. **System User aanmaken**: in Meta Business Suite → Business Settings → Users → System Users → maak een system user aan met rol "Employee" of "Admin", en koppel je advertentieaccount + je Instagram Business account (via de gekoppelde Facebook Pagina) eraan.
3. **Access token genereren** voor die system user met minimaal deze permissions:
   - `ads_read` (voor advertentie-data)
   - `instagram_basic`, `pages_read_engagement`, `instagram_manage_comments` (voor Instagram comments/captions)
   - Kies een **langlevend token** (System User tokens kunnen permanent zijn, hoeven niet elke 60 dagen ververst).
4. **Ad Account ID**: te vinden in Ads Manager, rechtsboven, vorm `act_1234567890`.
5. **Instagram Business Account ID**: Business Settings → Accounts → Instagram Accounts, of via de Graph API Explorer opvragen op je gekoppelde Pagina (`/{page-id}?fields=instagram_business_account`).

**Belangrijk over veiligheid**: geef dit token nooit direct in platte tekst door dat in een publieke plek terechtkomt. Zodra je het aanlevert, zet ik het alleen als omgevingsvariabele neer (nooit in git/commits) zodat het niet in de repository-historie belandt.

## Bestanden

- `fetch_ads_insights.py` — haalt performance per advertentie op (spend, impressies, clicks, CTR, CPC, resultaten, kosten per resultaat) en schrijft naar `reports/`.
- `fetch_instagram_comments.py` — haalt recente posts + comments op, doet een woord-/zinsfrequentie-analyse, schrijft naar `voice_of_customer/`.
- `VOICE_OF_CUSTOMER.md` — doorlopend, groeiend document met letterlijke klantzinnen per categorie (pijnpunten, verlangens, twijfels, bruikbare quotes).
- `ITERATION_LOG.md` — logboek van elke 3-daagse cyclus: best presterende ad + 5 iteratievoorstellen + status.

## Cadans (zodra credentials binnen zijn)

- **Dagelijks**: script draait, korte performance-update in de chat.
- **Elke 3 dagen**: vergelijking + minimaal 5 iteraties, toegevoegd aan `ITERATION_LOG.md`.
- **Doorlopend**: Instagram comments/captions worden meegenomen, nieuwe terugkerende taal wordt toegevoegd aan `VOICE_OF_CUSTOMER.md`.

Dit wordt aangestuurd via een terugkerende Claude Routine die deze scripts uitvoert en de output analyseert.
