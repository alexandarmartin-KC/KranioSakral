# KranioSakral

Statisk hjemmeside til Kranio Sakral Terapi v/Dorthe Pia.  
Hostet på **Nordicway webhotel** med eget domæne **dpkranio.dk**.

## Sådan virker det

HTML/CSS/JS-filer ligger i `/public_html/` på Nordicway.  
Admin-panelet (`/dpdp`) bruger PHP + MySQL til at gemme redigérbart indhold.  
GitHub bruges til versionsstyring.

## Admin-panel

Gå til `dpkranio.dk/dpdp` → log ind → vælg side → redigér tekst → gem.

Indhold gemmes i MySQL-databasen og indlæses automatisk på de offentlige sider.

## Opsætning (første gang)

1. Opret en MySQL-database i cPanel
2. Kopiér `api/config.example.php` til `api/config.php`
3. Udfyld DB_HOST, DB_NAME, DB_USER, DB_PASS
4. Åbn `dpkranio.dk/api/setup.php` i browseren
5. Log ind på `dpkranio.dk/dpdp` med **admin** / **dpdp2026**
6. Skift adgangskode

## Struktur

- `index.html` — Forside
- `kranio-sakral-terapi.html` — Behandlingsinfo
- `priser-booking.html` — Priser & booking
- `om-mig.html` — Om mig
- `privatlivspolitik.html` — Privatlivspolitik
- `cookiepolitik.html` — Cookiepolitik
- `dpdp.html` — Admin-panel
- `api/` — PHP backend (auth, content, setup)
- `assets/` — CSS, JS, indhold
- `billeder/` — Billeder
- `bootstrap/` — Bootstrap-tema
- `.htaccess` — Clean URLs + HTTPS

## Lokal test

```bash
php -S localhost:8080
```

Åbn `http://localhost:8080` i browseren.  
(API kræver MySQL – brug MAMP/XAMPP lokalt.)
