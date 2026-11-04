# NSA Trailers: Homepage + SEO Landing Page Redesign

Redesign concept for [No Strings Attached Trailer Hire](https://www.nsatrailers.com.au/) by Digital Movement.

## Live preview (GitHub Pages)

- Homepage: `index.html`
- SEO landing page (Trailer Hire Brisbane): `trailer-hire-brisbane.html`

Preview pages carry `noindex, nofollow` so they will not compete with the live site.

## WordPress theme

`wordpress-theme/nsa-trailers/` is a drop in classic theme.

| File | Purpose |
| --- | --- |
| `header.php` / `footer.php` | Global header and footer (top bar, sticky nav, phone icon + hamburger on mobile, floating Call Now button) |
| `front-page.php` | Homepage |
| `page-trailer-hire.php` | Page template "SEO Landing: Trailer Hire Brisbane" (assign to a page with slug `trailer-hire-brisbane`) |
| `part-hero-form.php` / `part-contact.php` | Banner quote form and the contact, map and form section above the footer |
| `nsa.css` / `nsa.js` | All styles and interactions (enqueued in `functions.php`) |

### Install
1. Zip the `nsa-trailers` folder and upload via Appearance > Themes, then activate.
2. Settings > Reading: set a static front page.
3. Create a page with slug `trailer-hire-brisbane` and choose the SEO Landing template.
4. Forms are front end demos (`data-demo`). Swap in Contact Form 7, Gravity Forms or a Lockii booking embed.

## Design notes
- Containers: 1440px max width, 1880px on screens 1920px and wider.
- Banner content shows immediately (no reveal); scroll reveals, parallax, marquee, count ups, and hover fills elsewhere. Respects `prefers-reduced-motion`.
- All CTAs use solid backgrounds. Service and fleet cards are fully clickable.
- LocalBusiness and FAQPage schema included.
- Images are currently loaded from the existing site CDN; move them into the WordPress media library before launch.
