<form class="form-card" id="quote" data-demo action="#" method="post">
  <div class="form-body">
    <h2>Check availability</h2>
    <p>Pick your trailer and dates. We confirm within minutes.</p>
    <div class="form-grid">
      <div class="field"><label for="q-name">Name</label><input id="q-name" name="name" required autocomplete="name" placeholder="Your name"></div>
      <div class="field"><label for="q-phone">Phone</label><input id="q-phone" name="phone" type="tel" required autocomplete="tel" placeholder="04xx xxx xxx"></div>
      <div class="field field--full"><label for="q-email">Email</label><input id="q-email" name="email" type="email" required autocomplete="email" placeholder="you@email.com"></div>
      <div class="field"><label for="q-trailer">Trailer</label>
        <select id="q-trailer" name="trailer"><option>8x5 Box Trailer</option><option>7x5 Box Trailer</option><option>Not sure yet</option></select></div>
      <div class="field"><label for="q-loc">Pickup location</label>
        <select id="q-loc" name="location"><option>Upper Kedron</option><option>Gaythorne</option></select></div>
      <div class="field"><label for="q-start">Pickup date</label><input id="q-start" name="start" type="date" required></div>
      <div class="field"><label for="q-end">Return date</label><input id="q-end" name="end" type="date" required></div>
    </div>
    <button class="btn btn--brand btn--block" type="submit" style="margin-top:20px">Check Availability <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 5l7 7-7 7"/></svg></button>
    <p class="form-note"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg> No payment required to enquire. Secure and private.</p>
  </div>
  <div class="form-success"><span class="check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg></span><h3>Request received</h3><p>Thanks! We will confirm your trailer and send your secure access details shortly.</p></div>
</form>
