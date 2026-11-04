<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#0A0B0D">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="sr-only" href="#main">Skip to content</a>
<div class="progress" aria-hidden="true"></div>
<div class="topbar">
  <div class="container">
    <ul class="topbar__list">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0z"/><circle cx="12" cy="10" r="3"/></svg> Upper Kedron &amp; Gaythorne, Brisbane QLD</li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg> 24/7 contactless pickup and return</li>
    </ul>
    <ul class="topbar__list">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 6-10 7L2 6"/></svg> <a href="mailto:bodhi@lockii.app">bodhi@lockii.app</a></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.4 1.8.7 2.7a2 2 0 0 1-.5 2.1L8 9.8a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.4c.9.3 1.8.6 2.7.7a2 2 0 0 1 1.7 2z"/></svg> <a href="tel:+61447943160">0447 943 160</a></li>
    </ul>
  </div>
</div>
<header class="site-header">
  <div class="container">
    <a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="No Strings Attached Trailer Hire home">
      <img src="https://cdn.lockii.app/f924369c-811d-4f8e-b768-aecd5cfa0ce8.png" alt="NSA No Strings Attached Trailer Hire" width="160" height="46">
    </a>
    <nav aria-label="Primary">
      <ul class="nav">
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="<?php echo is_front_page() ? 'is-active' : ''; ?>">Home</a></li>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#fleet">Our Fleet</a></li>
        <li><a href="<?php echo esc_url( home_url( '/trailer-hire-brisbane/' ) ); ?>" class="<?php echo is_page_template( 'page-trailer-hire.php' ) ? 'is-active' : ''; ?>">Trailer Hire Brisbane</a></li>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#locations">Locations</a></li>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#faq">FAQs</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>
    <div class="header-actions">
      <a class="header-call" href="tel:+61447943160" aria-label="Call NSA Trailers on 0447 943 160">
        <span class="icon-circle icon-circle--pulse"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.4 1.8.7 2.7a2 2 0 0 1-.5 2.1L8 9.8a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.4c.9.3 1.8.6 2.7.7a2 2 0 0 1 1.7 2z"/></svg></span>
        <span class="header-call__text"><small>Call us anytime</small>0447 943 160</span>
      </a>
      <a class="btn btn--brand btn--sm" href="#quote">Book a Trailer <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 5l7 7-7 7"/></svg></a>
      <button class="hamburger" aria-label="Open menu" aria-expanded="false" aria-controls="mobile-panel"><span></span><span></span><span></span></button>
    </div>
  </div>
</header>
<div class="mobile-panel" id="mobile-panel">
  <ul>
    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#fleet">Our Fleet</a></li>
    <li><a href="<?php echo esc_url( home_url( '/trailer-hire-brisbane/' ) ); ?>">Trailer Hire Brisbane</a></li>
    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#locations">Locations</a></li>
    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#faq">FAQs</a></li>
    <li><a href="#contact">Contact</a></li>
  </ul>
  <a class="btn btn--brand btn--block" href="#quote">Book a Trailer <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 5l7 7-7 7"/></svg></a>
  <p>Upper Kedron &amp; Gaythorne, Brisbane QLD<br>0447 943 160 &middot; bodhi@lockii.app</p>
</div>
