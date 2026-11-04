
## Duplicating the SEO landing page (keyword + location)

Every heading, paragraph, image alt, FAQ and FAQ schema on the landing page is built from a **keyword** and a **location**, so the same page can be cloned for any combination (for example "Box Trailer Hire" + "The Gap", or "Trailer Hire" + "Mitchelton").

### In WordPress
1. Duplicate the landing page (or create a new page) and choose the **SEO Landing (Keyword + Location)** template.
2. Add these custom fields to the page:
   - `nsa_keyword`: e.g. `Trailer Hire`
   - `nsa_location`: e.g. `The Gap`
   - `nsa_suburbs` (optional): comma separated nearby suburbs, e.g. `The Gap, Ashgrove, Bardon, Ferny Grove`
3. Set the page slug (e.g. `trailer-hire-the-gap`) and the SEO title/description in your SEO plugin.

If no fields are set, the page falls back to "Trailer Hire" + "Brisbane".

### In the static preview
Add another entry to `LANDINGS` in `build.py` with `file`, `kw`, `loc` and `suburbs`, then run `python3 build.py`.
