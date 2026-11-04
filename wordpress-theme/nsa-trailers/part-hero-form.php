<form class="form-card qf" id="quote" data-demo action="#" method="post">
  <div class="form-body">
    <div class="qf__head">
      <div class="qf__status"><i></i>Online now, book 24/7</div>
      <h2>Reserve your trailer</h2>
      <p>Takes under 60 seconds. No payment needed to enquire.</p>
    </div>

    <div class="qf__inner">
      <fieldset class="qf__group">
        <legend>1. Choose your trailer</legend>
        <div class="qf__trailers">
          <label class="qf__trailer">
            <input type="radio" name="trailer" value="8x5 Box Trailer" checked>
            <span class="qf__trailer-card">
              <img src="https://cdn.lockii.app/2320e099-0bde-4f87-959a-b93867286022.png?class=sm" alt="" width="64" height="48">
              <span><b>8x5 Box</b><small>Best for moves</small></span>
              <span class="qf__tick"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg></span>
            </span>
          </label>
          <label class="qf__trailer">
            <input type="radio" name="trailer" value="7x5 Box Trailer">
            <span class="qf__trailer-card">
              <img src="https://cdn.lockii.app/636c26be-ded8-49c7-9a54-d8475d29669a.png?class=sm" alt="" width="64" height="48">
              <span><b>7x5 Box</b><small>Tip runs and DIY</small></span>
              <span class="qf__tick"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg></span>
            </span>
          </label>
        </div>
      </fieldset>

      <fieldset class="qf__group">
        <legend>2. Pickup location and dates</legend>
        <div class="qf__seg" role="radiogroup">
          <label><input type="radio" name="location" value="Upper Kedron" checked><span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0z"/><circle cx="12" cy="10" r="3"/></svg> Upper Kedron</span></label>
          <label><input type="radio" name="location" value="Gaythorne"><span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0z"/><circle cx="12" cy="10" r="3"/></svg> Gaythorne</span></label>
        </div>
        <div class="form-grid qf__dates">
          <div class="field qf__field"><label for="q-start">Pickup</label><span class="qf__ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg></span><input id="q-start" name="start" type="date" required></div>
          <div class="field qf__field"><label for="q-end">Return</label><span class="qf__ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg></span><input id="q-end" name="end" type="date" required></div>
        </div>
      </fieldset>

      <fieldset class="qf__group">
        <legend>3. Your details</legend>
        <div class="form-grid">
          <div class="field qf__field"><label for="q-name" class="sr-only">Name</label><span class="qf__ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="8" r="4"/><path d="M4 21a8 8 0 0 1 16 0"/></svg></span><input id="q-name" name="name" required autocomplete="name" placeholder="Your name"></div>
          <div class="field qf__field"><label for="q-phone" class="sr-only">Phone</label><span class="qf__ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.4 1.8.7 2.7a2 2 0 0 1-.5 2.1L8 9.8a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.4c.9.3 1.8.6 2.7.7a2 2 0 0 1 1.7 2z"/></svg></span><input id="q-phone" name="phone" type="tel" required autocomplete="tel" placeholder="Mobile number"></div>
          <div class="field qf__field field--full"><label for="q-email" class="sr-only">Email</label><span class="qf__ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 6-10 7L2 6"/></svg></span><input id="q-email" name="email" type="email" required autocomplete="email" placeholder="Email address"></div>
        </div>
      </fieldset>

      <button class="btn btn--brand btn--block qf__submit" type="submit"><span>Check Availability</span> <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 5l7 7-7 7"/></svg></button>

      <ul class="qf__trust">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg> No payment to enquire</li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg> 24/7 pickup</li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20.6 13.4 13.4 20.6a2 2 0 0 1-2.8 0L2 12V2h10l8.6 8.6a2 2 0 0 1 0 2.8z"/><circle cx="7" cy="7" r="1.5"/></svg> Multi day discounts</li>
      </ul>
      <a class="qf__call" href="tel:+61447943160">Prefer to talk? <b>Call 0447 943 160</b></a>
    </div>
  </div>
  <div class="form-success"><span class="check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg></span><h3>Request received</h3><p>Thanks! We will confirm your trailer and send your secure access details shortly.</p></div>
</form>
