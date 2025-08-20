(function () {
  "use strict";

  /**
   * Helpers
   */
  const select = (el, all = false) => {
    el = el.trim();
    return all ? [...document.querySelectorAll(el)] : document.querySelector(el);
  };

  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all);
    if (selectEl) {
      all ? selectEl.forEach(e => e.addEventListener(type, listener)) : selectEl.addEventListener(type, listener);
    }
  };

  const scrollto = (el) => {
    let elementPos = select(el).offsetTop;
    window.scrollTo({
      top: elementPos,
      behavior: "smooth"
    });
  };

  /**
   * Toggle header (mobile)
   */
  const headerToggleBtn = select('.header-toggle');
  const header = select('#header');
  const headerToggle = () => {
    header.classList.toggle('header-show');
    headerToggleBtn.classList.toggle('bi-list');
    headerToggleBtn.classList.toggle('bi-x');
  };
  if (headerToggleBtn) {
    headerToggleBtn.addEventListener('click', headerToggle);
  }

  /**
   * Hide mobile nav on nav link click
   */
  on('click', '#navmenu a', () => {
    if (header.classList.contains('header-show')) {
      headerToggle();
    }
  }, true);

  /**
   * Toggle mobile nav dropdowns
   */
  on('click', '.navmenu .toggle-dropdown', function (e) {
    e.preventDefault();
    this.parentNode.classList.toggle('active');
    this.parentNode.nextElementSibling.classList.toggle('dropdown-active');
    e.stopImmediatePropagation();
  }, true);

  /**
   * Preloader
   */
  const preloader = select('#preloader');
  if (preloader) {
    window.addEventListener('load', () => preloader.remove());
  }

  /**
   * Scroll top button
   */
  const scrollTop = select('.scroll-top');
  const toggleScrollTop = () => {
    if (scrollTop) {
      scrollTop.classList.toggle('active', window.scrollY > 100);
    }
  };
  if (scrollTop) {
    scrollTop.addEventListener('click', (e) => {
      e.preventDefault();
      scrollto('body');
    });
  }

  window.addEventListener('load', toggleScrollTop);
  document.addEventListener('scroll', toggleScrollTop);

  /**
   * Scrollspy for navmenu
   */
  const navmenuLinks = select('.navmenu a', true);
  const navmenuScrollspy = () => {
    let position = window.scrollY + 200;
    navmenuLinks.forEach(link => {
      if (!link.hash) return;
      let section = select(link.hash);
      if (!section) return;
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        navmenuLinks.forEach(el => el.classList.remove('active'));
        link.classList.add('active');
      } else {
        link.classList.remove('active');
      }
    });
  };
  window.addEventListener('load', navmenuScrollspy);
  document.addEventListener('scroll', navmenuScrollspy);

  /**
   * Smooth scroll on .scrollto links
   */
  on('click', '.scrollto', function (e) {
    if (select(this.hash)) {
      e.preventDefault();
      scrollto(this.hash);
    }
  }, true);

  /**
   * Scroll correction for hash links
   */
  window.addEventListener('load', () => {
    if (window.location.hash && select(window.location.hash)) {
      setTimeout(() => {
        scrollto(window.location.hash);
      }, 100);
    }
  });

  /**
   * Typed.js init
   */
  const typed = select('.typed');
  if (typed) {
    let typed_items = typed.getAttribute('data-typed-items').split(',');
    new Typed('.typed', {
      strings: typed_items,
      loop: true,
      typeSpeed: 100,
      backSpeed: 50,
      backDelay: 2000
    });
  }

  /**
   * AOS init
   */
  const aosInit = () => {
    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    });
  };
  window.addEventListener('load', aosInit);

  /**
   * Pure Counter init
   */
  new PureCounter();

  /**
   * Skills animation on scroll
   */
  let skillsAnimation = select('.skills-animation', true);
  skillsAnimation.forEach((item) => {
    new Waypoint({
      element: item,
      offset: '80%',
      handler: function () {
        let progress = item.querySelectorAll('.progress .progress-bar');
        progress.forEach(el => {
          el.style.width = el.getAttribute('aria-valuenow') + '%';
        });
      }
    });
  });

  /**
   * GLightbox init
   */
  const glightbox = GLightbox({
    selector: '.glightbox'
  });

  /**
   * Isotope init
   */
  const isotopeLayouts = select('.isotope-layout', true);
  isotopeLayouts.forEach(isotopeItem => {
    let layout = isotopeItem.getAttribute('data-layout') ?? 'masonry';
    let filter = isotopeItem.getAttribute('data-default-filter') ?? '*';
    let sort = isotopeItem.getAttribute('data-sort') ?? 'original-order';

    let initIsotope;
    imagesLoaded(isotopeItem.querySelector('.isotope-container'), function () {
      initIsotope = new Isotope(isotopeItem.querySelector('.isotope-container'), {
        itemSelector: '.isotope-item',
        layoutMode: layout,
        filter: filter,
        sortBy: sort
      });
    });

    isotopeItem.querySelectorAll('.isotope-filters li').forEach(filterBtn => {
      filterBtn.addEventListener('click', function () {
        isotopeItem.querySelector('.isotope-filters .filter-active').classList.remove('filter-active');
        this.classList.add('filter-active');
        initIsotope.arrange({
          filter: this.getAttribute('data-filter')
        });
        aosInit();
      });
    });
  });

  /**
   * Swiper init
   */
  const initSwiper = () => {
    const swiperElements = select('.init-swiper', true);
    swiperElements.forEach(swiperElement => {
      let config = JSON.parse(swiperElement.querySelector('.swiper-config').innerHTML.trim());
      if (swiperElement.classList.contains('swiper-tab')) {
        initSwiperWithCustomPagination(swiperElement, config); // Assumes this function exists
      } else {
        new Swiper(swiperElement, config);
      }
    });
  };
  window.addEventListener('load', initSwiper);

})();
