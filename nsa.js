/* NSA Trailers | interactions */
(function () {
  var doc = document.documentElement;
  var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  /* Sticky header + progress bar + floating call */
  var header = document.querySelector('.site-header');
  var progress = document.querySelector('.progress');
  var floatCall = document.querySelector('.mobile-dock');
  var toTop = document.querySelector('.to-top');
  var ring = document.querySelector('.to-top__progress');
  var heroBg = document.querySelector('.hero__bg');
  var parallaxImgs = document.querySelectorAll('[data-parallax]');
  var ticking = false;
  function onScroll() {
    var y = window.scrollY;
    var h = doc.scrollHeight - window.innerHeight;
    if (header) header.classList.toggle('is-scrolled', y > 40);
    if (progress) progress.style.transform = 'scaleX(' + (h > 0 ? y / h : 0) + ')';
    if (floatCall) floatCall.classList.toggle('is-visible', y > 300);
    if (toTop) toTop.classList.toggle('is-visible', y > 600);
    if (ring) ring.style.strokeDashoffset = 150.8 * (1 - (h > 0 ? y / h : 0));
    if (!reduce) {
      if (heroBg && y < window.innerHeight * 1.2) heroBg.style.transform = 'scale(1.06) translateY(' + y * 0.25 + 'px)';
      parallaxImgs.forEach(function (img) {
        var r = img.parentElement.getBoundingClientRect();
        if (r.bottom < 0 || r.top > window.innerHeight) return;
        var p = (r.top + r.height / 2 - window.innerHeight / 2) / window.innerHeight;
        img.style.transform = 'translateY(' + (p * -60 - 30) + 'px)';
      });
    }
    ticking = false;
  }
  window.addEventListener('scroll', function () {
    if (!ticking) { requestAnimationFrame(onScroll); ticking = true; }
  }, { passive: true });
  onScroll();

  /* Mobile menu */
  var burger = document.querySelector('.hamburger');
  if (burger) {
    burger.addEventListener('click', function () {
      var open = document.body.classList.toggle('menu-open');
      burger.setAttribute('aria-expanded', open);
    });
    document.querySelectorAll('.mobile-panel a').forEach(function (a) {
      a.addEventListener('click', function () {
        document.body.classList.remove('menu-open');
        burger.setAttribute('aria-expanded', 'false');
      });
    });
  }

  /* Split headings into words for a mask reveal */
  document.querySelectorAll('[data-split]').forEach(function (el) {
    var words = el.innerHTML.trim().split(/\s+(?![^<]*>)/);
    el.innerHTML = words.map(function (w, i) {
      return '<span class="w"><span style="transition-delay:' + i * 0.05 + 's">' + w + '</span></span>';
    }).join(' ');
    el.classList.add('split-words');
  });

  /* Reveal on scroll */
  var revealEls = document.querySelectorAll('.reveal, .split-words');
  if ('IntersectionObserver' in window && !reduce) {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) {
        if (e.isIntersecting) { e.target.classList.add('is-in'); io.unobserve(e.target); }
      });
    }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' });
    revealEls.forEach(function (el) { io.observe(el); });
  } else {
    revealEls.forEach(function (el) { el.classList.add('is-in'); });
  }

  /* Count up stats */
  var counters = document.querySelectorAll('[data-count]');
  if ('IntersectionObserver' in window) {
    var cio = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) {
        if (!e.isIntersecting) return;
        var el = e.target, end = parseFloat(el.dataset.count), start = performance.now(), dur = 1600;
        (function tick(now) {
          var t = Math.min((now - start) / dur, 1), eased = 1 - Math.pow(1 - t, 3);
          el.textContent = Math.round(end * eased);
          if (t < 1) requestAnimationFrame(tick);
        })(start);
        cio.unobserve(el);
      });
    }, { threshold: 0.1 });
    counters.forEach(function (c) { if (!reduce) { c.textContent = '0'; cio.observe(c); } });
  }

  /* FAQ smooth open/close */
  document.querySelectorAll('.faq details').forEach(function (d) {
    var body = d.querySelector('.faq__body');
    d.querySelector('summary').addEventListener('click', function (ev) {
      if (reduce) return;
      ev.preventDefault();
      if (d.open) {
        body.animate([{ height: body.offsetHeight + 'px' }, { height: '0px' }], { duration: 350, easing: 'ease' }).onfinish = function () { d.open = false; };
      } else {
        d.open = true;
        var h = body.offsetHeight;
        body.animate([{ height: '0px' }, { height: h + 'px' }], { duration: 400, easing: 'ease' });
      }
    });
  });

  /* Set date inputs minimum to today */
  var today = new Date().toISOString().split('T')[0];
  document.querySelectorAll('input[type="date"]').forEach(function (i) { i.min = today; });

  /* Demo form submit (wire to Contact Form 7 / Gravity Forms in WordPress) */
  document.querySelectorAll('form[data-demo]').forEach(function (f) {
    f.addEventListener('submit', function (ev) {
      ev.preventDefault();
      f.classList.add('is-sent');
    });
  });

  /* Scroll to top */
  if (toTop) toTop.addEventListener('click', function () { window.scrollTo({ top: 0, behavior: reduce ? 'auto' : 'smooth' }); });

  /* CTA hover: fill grows from the cursor position */
  document.querySelectorAll('.btn').forEach(function (b) {
    function setPos(e) {
      var r = b.getBoundingClientRect();
      b.style.setProperty('--x', (e.clientX - r.left) + 'px');
      b.style.setProperty('--y', (e.clientY - r.top) + 'px');
    }
    b.addEventListener('mouseenter', setPos);
    b.addEventListener('mouseleave', setPos);
  });

  /* Read more / read less */
  document.querySelectorAll('.guide').forEach(function (g) {
    var body = g.querySelector('.guide__body'), btn = g.querySelector('.guide__toggle'), label = g.querySelector('.guide__label');
    var collapsed = function () { return parseFloat(getComputedStyle(body).getPropertyValue('--collapsed')) || 460; };
    btn.addEventListener('click', function () {
      var open = g.classList.contains('is-open');
      var start = body.offsetHeight;
      g.classList.toggle('is-open', !open);
      btn.setAttribute('aria-expanded', String(!open));
      label.textContent = open ? 'Read more' : 'Read less';
      var end = open ? collapsed() : body.scrollHeight;
      if (reduce) { body.style.maxHeight = open ? '' : 'none'; return; }
      body.style.maxHeight = start + 'px';
      requestAnimationFrame(function () { body.style.maxHeight = end + 'px'; });
      body.addEventListener('transitionend', function te() {
        body.removeEventListener('transitionend', te);
        if (!open) body.style.maxHeight = 'none'; else body.style.maxHeight = '';
      });
      if (open) g.scrollIntoView({ behavior: reduce ? 'auto' : 'smooth', block: 'start' });
    });
  });

  /* Guide table of contents: open the guide before jumping to a section */
  document.querySelectorAll('.guide__toc a').forEach(function (a) {
    a.addEventListener('click', function (ev) {
      var g = a.closest('.guide'), target = document.querySelector(a.getAttribute('href'));
      if (!g || !target) return;
      ev.preventDefault();
      if (!g.classList.contains('is-open')) {
        var body = g.querySelector('.guide__body');
        g.classList.add('is-open');
        body.style.maxHeight = 'none';
        g.querySelector('.guide__toggle').setAttribute('aria-expanded', 'true');
        g.querySelector('.guide__label').textContent = 'Read less';
      }
      g.querySelectorAll('.guide__toc a').forEach(function (x) { x.classList.toggle('is-active', x === a); });
      target.scrollIntoView({ behavior: reduce ? 'auto' : 'smooth', block: 'start' });
    });
  });

  /* Year */
  document.querySelectorAll('[data-year]').forEach(function (y) { y.textContent = new Date().getFullYear(); });
})();
