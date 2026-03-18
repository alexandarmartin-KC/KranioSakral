# KranioSakral

Statisk hjemmeside til Kranio Sakral Terapi v/Dorthe Pia.  
Hostet via **GitHub Pages** på **dpkranio.dk**.

## Sådan virker det

Siden er 100 % statisk HTML/CSS/JS — ingen server, ingen database.  
GitHub Pages serverer filerne direkte fra dette repo.  
Når du pusher til `main`, opdateres hjemmesiden automatisk.

## Redigér indhold

### Tekst på Priser & Booking

Redigér filen `assets/content/priser-booking.default.json` og push til `main`.  
Ændringer er live inden for et par minutter.

### Øvrige sider

Redigér den relevante `.html`-fil direkte.

## Struktur

- `index.html` — Forside
- `kranio-sakral-terapi.html` — Behandlingsinfo
- `priser-booking.html` — Priser & booking
- `om-mig.html` — Om mig
- `privatlivspolitik.html` — Privatlivspolitik
- `cookiepolitik.html` — Cookiepolitik
- `assets/content/priser-booking.default.json` — Redigérbart indhold
- `assets/css/` — Stylesheets
- `assets/js/` — Scripts
- `billeder/` — Billeder
- `bootstrap/` — Bootstrap-tema

## Lokal test

```bash
python3 -m http.server 8080
```

Åbn `http://localhost:8080` i browseren.

## DNS-opsætning (dpkranio.dk)

Hos din domæne-udbyder skal du oprette:

| Type  | Navn | Værdi |
|-------|------|-------|
| CNAME | www  | `alexandarmartin-kc.github.io` |
| A     | @    | `185.199.108.153` |
| A     | @    | `185.199.109.153` |
| A     | @    | `185.199.110.153` |
| A     | @    | `185.199.111.153` |

GitHub Pages håndterer HTTPS automatisk.

## Vigtigt at tilpasse

- Tilføj Facebook/Instagram-URL i footerlinks.
- Indsæt korrekt Google Analytics målings-ID i `assets/js/main.js`.
