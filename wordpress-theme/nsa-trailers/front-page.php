<?php
/* Front page (homepage). */
get_header(); ?>
<main id="main">
<!-- HERO: content visible immediately, no reveal animation -->
<section class="hero">
  <div class="hero__bg" style="background-image:url('https://cdn.lockii.app/a5ae50af-2bdd-4f65-ba10-10ef1a1c7e97.png?class=xl')"></div>
  <div class="container hero__grid">
    <div class="hero__content">
      <span class="hero__badge"><b>24/7</b> Contactless pickup in Brisbane's north</span>
      <h1>Trailer hire made easy, with <em>no strings<svg viewBox="0 0 300 20" preserveAspectRatio="none" aria-hidden="true"><path d="M2 14 C 80 4, 200 4, 298 12" fill="none" stroke="currentColor" stroke-width="5" stroke-linecap="round"/></svg></em> attached.</h1>
      <p class="hero__lead">Secure, galvanised box trailers for moving house, clean outs, green waste and weekend projects. Book online in minutes, collect from Upper Kedron or Gaythorne any time, day or night.</p>
      <div class="hero__ctas">
        <a class="btn btn--brand" href="#quote">Check Availability <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 5l7 7-7 7"/></svg></a>
        <a class="btn btn--white" href="tel:+61447943160"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.4 1.8.7 2.7a2 2 0 0 1-.5 2.1L8 9.8a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.4c.9.3 1.8.6 2.7.7a2 2 0 0 1 1.7 2z"/></svg> Call 0447 943 160</a>
      </div>
      <ul class="hero__trust">
        <li><span class="check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg></span>Book online in minutes</li>
        <li><span class="check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg></span>Discounts on longer hires</li>
        <li><span class="check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg></span>See your total upfront</li>
      </ul>
    </div>
    <div class="hero__media" role="img" aria-label="NSA galvanised box trailers ready for hire in Brisbane" style="background-image:url('https://cdn.lockii.app/a5ae50af-2bdd-4f65-ba10-10ef1a1c7e97.png?class=lg')"></div>
    <div class="hero__form">
      <?php get_template_part( 'part-hero-form' ); ?>
    </div>
  </div>
</section>

<div class="marquee" aria-hidden="true">
  <div class="marquee__track">
    <span class="marquee__item">24/7 Contactless Pickup</span><span class="marquee__item">Book Online In Minutes</span><span class="marquee__item">Upper Kedron</span><span class="marquee__item">Gaythorne</span><span class="marquee__item">Multi Day Discounts</span><span class="marquee__item">Galvanised Caged Trailers</span><span class="marquee__item">No Hidden Fees</span><span class="marquee__item">24/7 Contactless Pickup</span><span class="marquee__item">Book Online In Minutes</span><span class="marquee__item">Upper Kedron</span><span class="marquee__item">Gaythorne</span><span class="marquee__item">Multi Day Discounts</span><span class="marquee__item">Galvanised Caged Trailers</span><span class="marquee__item">No Hidden Fees</span>
  </div>
</div>

<section class="stats-band">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow reveal">Why Brisbane Chooses NSA</span>
      <h2 data-split>Trailer hire that works around you.</h2>
      <p class="lead reveal">No opening hours, no paperwork queues and no surprises. Just book, unlock and go.</p>
    </div>
    <div class="stat-grid">
      <div class="stat-card reveal" style="transition-delay:0.0s"><span class="stat-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></span><strong class="stat-card__num"><span data-count="24">24</span><em>/7</em></strong><h3>Pickup and return</h3><p>Collect at midnight or midday, it is up to you.</p></div>
      <div class="stat-card reveal" style="transition-delay:0.1s"><span class="stat-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0z"/><circle cx="12" cy="10" r="3"/></svg></span><strong class="stat-card__num"><span data-count="2">2</span><em></em></strong><h3>North side locations</h3><p>Upper Kedron and Gaythorne, minutes from home.</p></div>
      <div class="stat-card reveal" style="transition-delay:0.2s"><span class="stat-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg></span><strong class="stat-card__num"><span data-count="24">24</span><em>h</em></strong><h3>Full hire day</h3><p>A true 24 hours, not a business day.</p></div>
      <div class="stat-card reveal" style="transition-delay:0.3s"><span class="stat-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="7.5" cy="15.5" r="5.5"/><path d="m21 2-9.6 9.6M15.5 7.5l3 3L22 7l-3-3"/></svg></span><strong class="stat-card__num"><span data-count="100">100</span><em>%</em></strong><h3>Contactless pickup</h3><p>Secure access, no counters, no queues.</p></div>
    </div>
  </div>
</section>

<!-- FLEET -->
<section class="section" id="fleet">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow reveal">Our Rental Range</span>
      <h2 data-split>Tough trailers, ready when you are.</h2>
      <p class="lead reveal">Galvanised, cage equipped box trailers that are easy to tow behind most cars and SUVs. Every trailer is checked and road ready before each hire.</p>
    </div>
    <div class="fleet-grid">
      <a class="fleet-card reveal" href="#quote" aria-label="Book the 8x5 Box Trailer">
        <div class="fleet-card__media"><span class="fleet-card__size">8x5<small>ft</small></span><span class="fleet-card__chip">Most popular</span><img src="https://cdn.lockii.app/2320e099-0bde-4f87-959a-b93867286022.png?class=lg" alt="8x5 galvanised caged box trailer for hire in Brisbane" loading="lazy"></div>
        <div class="fleet-card__body">
          <div class="fleet-card__top"><h3>8x5 Box Trailer</h3></div>
          <p>Our largest box trailer with a high cage. Ideal for full house moves, furniture, appliances and big garden clean ups.</p>
          <ul class="tags"><li>House moves</li><li>Furniture</li><li>Green waste</li><li>Caged</li></ul>
          <ul class="fleet-card__specs"><li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg>Galvanised</li><li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>24/7 pickup</li><li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20.6 13.4 13.4 20.6a2 2 0 0 1-2.8 0L2 12V2h10l8.6 8.6a2 2 0 0 1 0 2.8z"/><circle cx="7" cy="7" r="1.5"/></svg>Multi day deals</li></ul>
          <div class="fleet-card__cta"><span>Check availability</span><span class="arrow-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></div>
        </div>
      </a>
      <a class="fleet-card reveal" href="#quote" aria-label="Book the 7x5 Box Trailer" style="transition-delay:.12s">
        <div class="fleet-card__media"><span class="fleet-card__size">7x5<small>ft</small></span><span class="fleet-card__chip">Great all rounder</span><img src="https://cdn.lockii.app/636c26be-ded8-49c7-9a54-d8475d29669a.png?class=lg" alt="7x5 galvanised caged box trailer for hire in Brisbane" loading="lazy"></div>
        <div class="fleet-card__body">
          <div class="fleet-card__top"><h3>7x5 Box Trailer</h3></div>
          <p>Compact, easy to tow and manoeuvre. Perfect for small moves, tip runs, DIY projects and weekend jobs.</p>
          <ul class="tags"><li>Tip runs</li><li>Small moves</li><li>DIY projects</li><li>Caged</li></ul>
          <ul class="fleet-card__specs"><li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg>Galvanised</li><li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>24/7 pickup</li><li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20.6 13.4 13.4 20.6a2 2 0 0 1-2.8 0L2 12V2h10l8.6 8.6a2 2 0 0 1 0 2.8z"/><circle cx="7" cy="7" r="1.5"/></svg>Multi day deals</li></ul>
          <div class="fleet-card__cta"><span>Check availability</span><span class="arrow-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></div>
        </div>
      </a>
    </div>
  </div>
</section>

<!-- ABOUT -->
<section class="section section--paper2" id="about">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow reveal">About No Strings Attached</span>
      <h2 data-split>The simplest way to hire a trailer in Brisbane.</h2>
      <p class="lead reveal">No counters, no queues and no fine print surprises. NSA gives you reliable, secure trailer hire with smart access, so you collect when it suits you and get on with your day.</p>
    </div>
    <div class="split">
      <div class="media-stack reveal reveal--left">
        <span class="media-stack__tag">Locally owned in Brisbane</span>
        <div class="media-stack__main"><img data-parallax src="https://cdn.lockii.app/2320e099-0bde-4f87-959a-b93867286022.png?class=lg" alt="Galvanised 8x5 box trailer ready for hire at NSA Trailers Brisbane" loading="lazy"></div>
        <div class="media-stack__float"><strong>24/7</strong><span>Pick up and drop off on your schedule, not ours.</span></div>
      </div>
      <div>
        <ul class="feature-list feature-list--cards">
          <li class="reveal"><span class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M13 2 3 14h9l-1 8 10-12h-9l1-8z"/></svg></span><div><h4>Easy online booking</h4><p>Choose a trailer, pick your dates and confirm in a few taps.</p></div></li>
          <li class="reveal"><span class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="7.5" cy="15.5" r="5.5"/><path d="m21 2-9.6 9.6M15.5 7.5l3 3L22 7l-3-3"/></svg></span><div><h4>Secure, contactless access</h4><p>Receive your access details and collect at any hour.</p></div></li>
          <li class="reveal"><span class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20.6 13.4 13.4 20.6a2 2 0 0 1-2.8 0L2 12V2h10l8.6 8.6a2 2 0 0 1 0 2.8z"/><circle cx="7" cy="7" r="1.5"/></svg></span><div><h4>Honest, upfront pricing</h4><p>See your full total before you confirm, with discounts on multi day hires.</p></div></li>
          <li class="reveal"><span class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg></span><div><h4>Checked before every hire</h4><p>Every trailer is inspected and road ready before you collect it.</p></div></li>
        </ul>
        <a class="btn btn--dark reveal" href="#fleet">Explore the Fleet <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 5l7 7-7 7"/></svg></a>
      </div>
    </div>
  </div>
</section>

<!-- HOW IT WORKS -->
<section class="section section--dark" id="how">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow reveal">How It Works</span>
      <h2 data-split>On the road in three simple steps.</h2>
      <p class="lead reveal">Booking a trailer with NSA takes less time than finding your car keys.</p>
    </div>
    <div class="steps reveal">
      <div class="steps__line" aria-hidden="true"><span class="steps__fill"></span><span class="steps__runner"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M2 7h14v8H2zM16 13h6"/><circle cx="7" cy="17" r="2"/><path d="M2 15h3M9 15h7"/></svg></span></div>
      <div class="step" style="--d:0.0s"><span class="step__num">01</span><span class="step__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg></span><h3>Choose your dates</h3><p>Select your trailer, location and hire dates. Your total is shown upfront.</p></div>
      <div class="step" style="--d:0.9s"><span class="step__num">02</span><span class="step__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="7.5" cy="15.5" r="5.5"/><path d="m21 2-9.6 9.6M15.5 7.5l3 3L22 7l-3-3"/></svg></span><h3>Get secure access</h3><p>Confirm your booking online and receive your access details instantly.</p></div>
      <div class="step" style="--d:1.8s"><span class="step__num">03</span><span class="step__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M2 7h14v8H2zM16 13h6"/><circle cx="7" cy="17" r="2"/><path d="M2 15h3M9 15h7"/></svg></span><h3>Collect and go</h3><p>Pick up from Upper Kedron or Gaythorne any time. Return it when you are done.</p></div>
    </div>
  </div>
</section>

<!-- USE CASES -->
<section class="section" id="uses">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow reveal">What You Can Do</span>
      <h2 data-split>One trailer. Endless weekend jobs.</h2>
      <p class="lead reveal">Whatever is on your list, there is an NSA trailer for it. Tap a job to see how we can help.</p>
    </div>
    <div class="services">
      <a class="service-card reveal" href="<?php echo esc_url( home_url( '/trailer-hire-brisbane/' ) ); ?>#moving" style="transition-delay:0.00s"><span class="service-card__bg" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m3 10 9-7 9 7v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><path d="M9 22V12h6v10"/></svg></span><span class="service-card__top"><span class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m3 10 9-7 9 7v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><path d="M9 22V12h6v10"/></svg></span><span class="arrow-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></span><h3>House &amp; unit moves</h3><p>Move furniture, boxes and appliances yourself and save on removalists.</p><ul class="service-card__fits"><li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg>Sofas and beds</li><li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg>Fridges and washers</li><li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg>Boxes and furniture</li></ul><span class="service-card__foot"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M2 7h14v8H2zM16 13h6"/><circle cx="7" cy="17" r="2"/><path d="M2 15h3M9 15h7"/></svg><span>Best trailer: <b>8x5 Box</b></span></span></a>
      <a class="service-card reveal" href="<?php echo esc_url( home_url( '/trailer-hire-brisbane/' ) ); ?>#rubbish" style="transition-delay:0.08s"><span class="service-card__bg" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 6h18M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2M19 6l-1 14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6M10 11v6M14 11v6"/></svg></span><span class="service-card__top"><span class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 6h18M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2M19 6l-1 14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6M10 11v6M14 11v6"/></svg></span><span class="arrow-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></span><h3>Clean outs &amp; tip runs</h3><p>Clear the garage, shed or rental in one easy trip to the tip.</p><ul class="service-card__fits"><li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg>Garage and shed junk</li><li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg>Hard rubbish</li><li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg>End of lease waste</li></ul><span class="service-card__foot"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M2 7h14v8H2zM16 13h6"/><circle cx="7" cy="17" r="2"/><path d="M2 15h3M9 15h7"/></svg><span>Best trailer: <b>7x5 Box</b></span></span></a>
      <a class="service-card reveal" href="<?php echo esc_url( home_url( '/trailer-hire-brisbane/' ) ); ?>#garden" style="transition-delay:0.16s"><span class="service-card__bg" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.5 19 2c1 2 2 4.2 2 8 0 5.5-4.8 10-10 10z"/><path d="M2 21c0-3 1.9-5.4 5.1-6"/></svg></span><span class="service-card__top"><span class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.5 19 2c1 2 2 4.2 2 8 0 5.5-4.8 10-10 10z"/><path d="M2 21c0-3 1.9-5.4 5.1-6"/></svg></span><span class="arrow-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></span><h3>Garden &amp; green waste</h3><p>Haul mulch, soil, branches and clippings without wrecking your car.</p><ul class="service-card__fits"><li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg>Branches and clippings</li><li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg>Mulch and soil</li><li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg>Turf and pavers</li></ul><span class="service-card__foot"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M2 7h14v8H2zM16 13h6"/><circle cx="7" cy="17" r="2"/><path d="M2 15h3M9 15h7"/></svg><span>Best trailer: <b>8x5 Box</b></span></span></a>
      <a class="service-card reveal" href="<?php echo esc_url( home_url( '/trailer-hire-brisbane/' ) ); ?>#diy" style="transition-delay:0.00s"><span class="service-card__bg" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.8-3.8a6 6 0 0 1-7.9 7.9l-6.9 6.9a2.1 2.1 0 0 1-3-3l6.9-6.9a6 6 0 0 1 7.9-7.9z"/></svg></span><span class="service-card__top"><span class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.8-3.8a6 6 0 0 1-7.9 7.9l-6.9 6.9a2.1 2.1 0 0 1-3-3l6.9-6.9a6 6 0 0 1 7.9-7.9z"/></svg></span><span class="arrow-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></span><h3>DIY &amp; renovations</h3><p>Pick up timber, pavers and supplies straight from the hardware store.</p><ul class="service-card__fits"><li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg>Timber and sheeting</li><li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg>Bricks and pavers</li><li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg>Tools and supplies</li></ul><span class="service-card__foot"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M2 7h14v8H2zM16 13h6"/><circle cx="7" cy="17" r="2"/><path d="M2 15h3M9 15h7"/></svg><span>Best trailer: <b>7x5 Box</b></span></span></a>
      <a class="service-card reveal" href="<?php echo esc_url( home_url( '/trailer-hire-brisbane/' ) ); ?>#business" style="transition-delay:0.08s"><span class="service-card__bg" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 8 12 3 3 8v8l9 5 9-5z"/><path d="m3 8 9 5 9-5M12 13v8"/></svg></span><span class="service-card__top"><span class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 8 12 3 3 8v8l9 5 9-5z"/><path d="m3 8 9 5 9-5M12 13v8"/></svg></span><span class="arrow-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></span><h3>Trades &amp; business</h3><p>Flexible hire for tradies, market stalls and one off deliveries.</p><ul class="service-card__fits"><li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg>Trade gear</li><li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg>Market stall setups</li><li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg>Stock deliveries</li></ul><span class="service-card__foot"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M2 7h14v8H2zM16 13h6"/><circle cx="7" cy="17" r="2"/><path d="M2 15h3M9 15h7"/></svg><span>Best trailer: <b>Either size</b></span></span></a>
      <a class="service-card reveal" href="<?php echo esc_url( home_url( '/trailer-hire-brisbane/' ) ); ?>#getaway" style="transition-delay:0.16s"><span class="service-card__bg" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3.5 21 12 4l8.5 17M12 4v0M2 21h20M12 13l-4 8M12 13l4 8"/></svg></span><span class="service-card__top"><span class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3.5 21 12 4l8.5 17M12 4v0M2 21h20M12 13l-4 8M12 13l4 8"/></svg></span><span class="arrow-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></span><h3>Weekend getaways</h3><p>Take the camping gear, bikes and extra luggage with room to spare.</p><ul class="service-card__fits"><li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg>Camping gear</li><li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg>Bikes and eskies</li><li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg>Extra luggage</li></ul><span class="service-card__foot"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M2 7h14v8H2zM16 13h6"/><circle cx="7" cy="17" r="2"/><path d="M2 15h3M9 15h7"/></svg><span>Best trailer: <b>7x5 Box</b></span></span></a>
    </div>
  </div>
</section>

<!-- LOCATIONS -->
<section class="section section--paper2" id="locations">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow reveal">Find Your Closest Location</span>
      <h2 data-split>Two pickup points on Brisbane's north side.</h2>
      <p class="lead reveal">Both locations offer 24/7 contactless pickup and return.</p>
    </div>
    <div class="loc-grid">
      <a class="loc-card reveal" href="https://www.google.com/maps/search/?api=1&amp;query=Upper+Kedron+QLD+4055" target="_blank" rel="noopener">
        <div class="loc-card__map"><iframe title="Map of Upper Kedron" loading="lazy" tabindex="-1" src="https://maps.google.com/maps?q=Upper%20Kedron%20QLD%204055&amp;z=14&amp;output=embed"></iframe></div>
        <div class="loc-card__body">
          <span class="pill"><i></i>Open 24/7</span>
          <h3>Upper Kedron</h3>
          <div class="loc-card__row"><p>Close to Ferny Grove, The Gap, Keperra and Arana Hills.</p><span class="arrow-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></div>
        </div>
      </a>
      <a class="loc-card reveal" href="https://www.google.com/maps/search/?api=1&amp;query=Gaythorne+QLD+4051" target="_blank" rel="noopener" style="transition-delay:.12s">
        <div class="loc-card__map"><iframe title="Map of Gaythorne" loading="lazy" tabindex="-1" src="https://maps.google.com/maps?q=Gaythorne%20QLD%204051&amp;z=14&amp;output=embed"></iframe></div>
        <div class="loc-card__body">
          <span class="pill"><i></i>Open 24/7</span>
          <h3>Gaythorne</h3>
          <div class="loc-card__row"><p>Close to Mitchelton, Enoggera, Alderley and Newmarket.</p><span class="arrow-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></div>
        </div>
      </a>
    </div>
  </div>
</section>

<!-- CTA BAND -->
<section class="section section--paper2" style="padding-top:0">
  <div class="container">
    <div class="cta-band reveal reveal--scale">
      <h2>Ready to move this weekend?</h2>
      <p>Check live availability now and lock in your trailer before it is gone.</p>
      <div class="cta-band__btns">
        <a class="btn btn--dark" href="#quote">Book a Trailer <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 5l7 7-7 7"/></svg></a>
        <a class="btn btn--white" href="tel:+61447943160"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.4 1.8.7 2.7a2 2 0 0 1-.5 2.1L8 9.8a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.4c.9.3 1.8.6 2.7.7a2 2 0 0 1 1.7 2z"/></svg> 0447 943 160</a>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="section" id="faq">
  <div class="container faq-wrap">
    <div class="section-head faq-wrap__head">
      <span class="eyebrow reveal">Frequently Asked Questions</span>
      <h2 data-split>Everything you need to know.</h2>
      <p class="lead reveal">Still unsure? Our team is happy to help you pick the right trailer.</p>
      <a class="btn btn--dark reveal" href="#contact">Ask a Question <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 5l7 7-7 7"/></svg></a>
    </div>
    <div class="faq reveal">
      <details open><summary>What trailers can I hire from No Strings Attached?<span class="plus" aria-hidden="true"></span></summary><div class="faq__body"><p>We offer trailer hire in Upper Kedron and Gaythorne. Our fleet includes 8x5 and 7x5 galvanised caged box trailers, perfect for moving, projects and weekend getaways.</p></div></details>
      <details><summary>How does trailer hire work per day?<span class="plus" aria-hidden="true"></span></summary><div class="faq__body"><p>Our daily hire period is 24 hours. You will see your total before confirming your booking. Rates vary by trailer and longer hires are discounted.</p></div></details>
      <details><summary>Where do I collect my trailer?<span class="plus" aria-hidden="true"></span></summary><div class="faq__body"><p>Pick up your trailer at Upper Kedron or Gaythorne. Book online, receive your secure access details and collect your trailer at your convenience. Call 0447 943 160 for assistance.</p></div></details>
      <details><summary>How do I rent a trailer?<span class="plus" aria-hidden="true"></span></summary><div class="faq__body"><p>Select your trailer, location and dates to book online in minutes. You will see all availability and your total before confirming. Need help? Email bodhi@lockii.app or call 0447 943 160.</p></div></details>
      <details><summary>Are there discounts for longer hires?<span class="plus" aria-hidden="true"></span></summary><div class="faq__body"><p>Yes. We offer discounts for multi day and extended trailer hires. The total depends on the trailer and duration, so check your dates on the booking form or contact us for details.</p></div></details>
      <details><summary>Need help picking a trailer?<span class="plus" aria-hidden="true"></span></summary><div class="faq__body"><p>If you are not sure which trailer is right for your job, just ask. Our team is happy to help you choose the best fit.</p></div></details>
    </div>
  </div>
</section>

<?php get_template_part( 'part-contact' ); ?>
</main>

<?php /* FAQ schema */ ?>
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "FAQPage", "mainEntity": [{"@type": "Question", "name": "What trailers can I hire from No Strings Attached?", "acceptedAnswer": {"@type": "Answer", "text": "We offer trailer hire in Upper Kedron and Gaythorne. Our fleet includes 8x5 and 7x5 galvanised caged box trailers, perfect for moving, projects and weekend getaways."}}, {"@type": "Question", "name": "How does trailer hire work per day?", "acceptedAnswer": {"@type": "Answer", "text": "Our daily hire period is 24 hours. You will see your total before confirming your booking. Rates vary by trailer and longer hires are discounted."}}, {"@type": "Question", "name": "Where do I collect my trailer?", "acceptedAnswer": {"@type": "Answer", "text": "Pick up your trailer at Upper Kedron or Gaythorne. Book online, receive your secure access details and collect your trailer at your convenience. Call 0447 943 160 for assistance."}}, {"@type": "Question", "name": "How do I rent a trailer?", "acceptedAnswer": {"@type": "Answer", "text": "Select your trailer, location and dates to book online in minutes. You will see all availability and your total before confirming. Need help? Email bodhi@lockii.app or call 0447 943 160."}}, {"@type": "Question", "name": "Are there discounts for longer hires?", "acceptedAnswer": {"@type": "Answer", "text": "Yes. We offer discounts for multi day and extended trailer hires. The total depends on the trailer and duration, so check your dates on the booking form or contact us for details."}}, {"@type": "Question", "name": "Need help picking a trailer?", "acceptedAnswer": {"@type": "Answer", "text": "If you are not sure which trailer is right for your job, just ask. Our team is happy to help you choose the best fit."}}]}</script>
<?php get_footer();
