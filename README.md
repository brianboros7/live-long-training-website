# Live Long Training — website

Starter PHP site for Live Long Training: strength and functional fitness coaching for men and women in three age bands: 25+, 40+ and 55+. No framework or build step; plain PHP 8.1+, CSS and a little JS.

## Run locally

```bash
php -S localhost:8000 router.php
```

Then open http://localhost:8000.

## Structure

| Path | Purpose |
|---|---|
| `index.php` | Home page |
| `programs.php` | `/programs` list and `/programs/{slug}` detail pages |
| `coaching.php` | Coaching tiers (prices TBD) |
| `about.php` | Approach and coach bio (TODO) |
| `contact.php` | Free consult form (CSRF + honeypot; logs to `storage/messages.log`, emails `CONTACT_TO` if set) |
| `404.php` | Not found page |
| `includes/config.php` | Site name, nav, contact email, helpers |
| `includes/programs.php` | Content for the three age-band programs (and redirects from the old audience URLs) |
| `includes/header.php`, `footer.php` | Shared layout |
| `css/style.css`, `js/main.js` | Styles and mobile menu |
| `.htaccess` | Clean URLs on Apache/cPanel |
| `router.php` | Clean URLs for the PHP dev server |

Research behind the content lives in `../research/`.

## To do

- [ ] Pick domain; update `SITE_URL` and enable the HTTPS redirect in `.htaccess`
- [ ] Logo, colors, photos
- [ ] Coach bio and certifications
- [ ] Final prices on the coaching page
- [ ] Set `CONTACT_TO` and test mail on the host
- [ ] Blog for evidence-based articles
- [ ] Health screening/intake form
- [ ] Git repo + cPanel deploy (`.cpanel.yml`)
