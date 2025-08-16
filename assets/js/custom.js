document.addEventListener("DOMContentLoaded", function () {
  initAwardSlider();
  initPortfolioSliders();
  initMarquee(1.5);
  initOurServicesSlider(".cus-services-slider");
  initPricingTabs();
  initTestimonialSlider();
  initFaqAccordionOpenOnly(".accordion-item");
  initMilestoneCounter({ sectionSelector: ".bevisible_center-info", target: 7, digits: 2, duration: 1200 });

  // Desktop (vertical)
  new Swiper(".challenge-web-slider", {
    direction: "vertical",
    pagination: {
      el: ".challenge-web-slider .swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".challenge-web-slider .swiper-button-next",
      prevEl: ".challenge-web-slider .swiper-button-prev",
    },
    slidesPerView: 1,
    spaceBetween: 30,
  });

  // Mobile (horizontal)
  new Swiper(".challenge-mobile-slider", {
    pagination: {
      el: ".challenge-mobile-slider .swiper-pagination",
      clickable: true,
    },
    slidesPerView: 1,
    spaceBetween: 0,
  });
});

function initAwardSlider() {
  new Swiper(".award-slider", {
    loop: true,
    slidesPerView: 5,
    spaceBetween: 24,
    allowTouchMove: true,
    grabCursor: true,
    speed: 600,
    breakpoints: {
      0: { slidesPerView: 2, spaceBetween: 16 },
      576: { slidesPerView: 3, spaceBetween: 20 },
      768: { slidesPerView: 4, spaceBetween: 20 },
      992: { slidesPerView: 5, spaceBetween: 24 },
    },
  });
}
function initPortfolioSliders() {
  // First Swiper - left direction
  new Swiper(".portfolioslider_portfolio-slider .swiper:nth-child(1)", {
    slidesPerView: 3,
    spaceBetween: 24,
    loop: true,
    speed: 3000, // smooth speed
    autoplay: {
      delay: 0,
      disableOnInteraction: false,
      reverseDirection: true, // left scroll
    },
    allowTouchMove: false, // only auto scroll
  });

  // Second Swiper - right direction
  new Swiper(".portfolioslider_portfolio-slider .swiper:nth-child(2)", {
    slidesPerView: 3,
    spaceBetween: 24,
    loop: true,
    speed: 3000,
    autoplay: {
      delay: 0,
      disableOnInteraction: false,
      reverseDirection: false, // right scroll
    },
    allowTouchMove: false,
  });
}
function initMarquee(speed) {
  // Sab marqueetext_main sections ko loop kare
  document.querySelectorAll(".marqueetext_main").forEach(function (container) {
    const marquees = container.querySelectorAll(".rfm-marquee");
    if (!marquees.length) return;

    marquees.forEach((marquee, index) => {
      const content = marquee.innerHTML;
      marquee.innerHTML = content + content;

      let offset = 0;
      let direction = index % 2 === 0 ? -1 : 1;

      function animate() {
        offset += direction * speed;
        if (direction === -1 && offset <= -marquee.scrollWidth / 2) {
          offset = 0;
        }
        if (direction === 1 && offset >= 0) {
          offset = -marquee.scrollWidth / 2;
        }
        marquee.style.transform = `translateX(${offset}px)`;
        requestAnimationFrame(animate);
      }

      animate();
    });
  });
}
function initOurServicesSlider(selector) {
  if (!selector) return;

  // Accept selector as string or element
  let el = typeof selector === "string" ? document.querySelector(selector) : selector;
  if (!el) return;

  if (typeof Swiper === "undefined") {
    console.error("Swiper JS library not found!");
    return;
  }

  new Swiper(el, {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: false,
    allowTouchMove: true,
    centeredSlides: false,
    grabCursor: true,
    autoplay: false,
    breakpoints: {
      0: { slidesPerView: 1, spaceBetween: 15 },
      768: { slidesPerView: 2, spaceBetween: 20 },
      1024: { slidesPerView: 3, spaceBetween: 30 },
    },
  });

  el.style.overflow = "visible";
  const wrapper = el.querySelector(".swiper-wrapper");
  if (wrapper) wrapper.style.overflow = "visible";
}
function initPricingTabs() {
  const tabButtons = document.querySelectorAll(".pricing_price-tabs ul li");
  const tabContents = document.querySelectorAll(".pricing_tab-content .pricing_price-grid");

  tabButtons.forEach((btn, index) => {
    btn.addEventListener("click", function () {
      tabButtons.forEach((b) => b.classList.remove("pricing_active"));
      tabContents.forEach((c) => c.classList.remove("pricing_active"));

      btn.classList.add("pricing_active");
      tabContents[index].classList.add("pricing_active");
    });
  });
}
function initTestimonialSlider() {
  new Swiper(".testimo-slider", {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: false,
    allowTouchMove: true,
    grabCursor: true,
    speed: 600,

    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },

    navigation: false,
    autoplay: false,
  });
}
function initFaqAccordionOpenOnly(selector) {
  const items = document.querySelectorAll(selector);
  if (!items.length) return;

  // Helper: animate OPEN only (close is instant)
  function animateOpen(el, duration = 280) {
    // Cancel any running animation
    if (el._animFrame) cancelAnimationFrame(el._animFrame);

    el.classList.add("show");
    el.style.overflow = "hidden";
    el.style.maxHeight = "0px";

    // Measure target height
    const target = el.scrollHeight;
    const start = performance.now();

    // Smooth ease-out
    const easeOutCubic = (t) => 1 - Math.pow(1 - t, 3);

    function step(ts) {
      const progress = Math.min((ts - start) / duration, 1);
      const eased = easeOutCubic(progress);
      el.style.maxHeight = target * eased + "px";

      if (progress < 1) {
        el._animFrame = requestAnimationFrame(step);
      } else {
        el.style.maxHeight = target + "px";
        el.style.overflow = "visible";
        el._animFrame = null;
      }
    }

    el._animFrame = requestAnimationFrame(step);
  }

  items.forEach((item) => {
    const btn = item.querySelector(".accordion-button");
    const body = item.querySelector(".accordion-collapse");
    const icon = btn ? btn.querySelector("svg") : null;

    if (!btn || !body) return;

    btn.addEventListener("click", () => {
      const isOpen = body.classList.contains("show");

      // Close all (instant)
      items.forEach((i) => {
        const b = i.querySelector(".accordion-collapse");
        const bt = i.querySelector(".accordion-button");
        const ic = bt ? bt.querySelector("svg") : null;

        if (!b || !bt) return;

        if (b._animFrame) cancelAnimationFrame(b._animFrame);
        b.classList.remove("show");
        b.style.maxHeight = null;
        b.style.overflow = "";

        bt.classList.add("collapsed");
        bt.setAttribute("aria-expanded", "false");
        if (ic) ic.style.transform = "rotate(0deg)";
      });

      // Open clicked (with JS transition)
      if (!isOpen) {
        btn.classList.remove("collapsed");
        btn.setAttribute("aria-expanded", "true");
        if (icon) icon.style.transform = "rotate(45deg)"; // plus → minus feel
        animateOpen(body, 280);
      }
    });
  });

  // Optional: keep height correct on resize if something is open
  window.addEventListener("resize", () => {
    items.forEach((i) => {
      const b = i.querySelector(".accordion-collapse");
      if (b && b.classList.contains("show")) {
        b.style.maxHeight = b.scrollHeight + "px";
      }
    });
  });
}
function initMilestoneCounter({ sectionSelector = ".bevisible_center-info", numberSelector = "h2", target = 7, digits = 2, duration = 1200, threshold = 0.35 } = {}) {
  const sectionEl = document.querySelector(sectionSelector);
  if (!sectionEl) return;

  const numEl = sectionEl.querySelector(numberSelector);
  if (!numEl) return;

  let started = false;

  // Easing (thoda smooth feel)
  function easeOutCubic(t) {
    return 1 - Math.pow(1 - t, 3);
  }

  function animateCount() {
    const start = performance.now();
    const from = 0;
    const to = Math.max(0, parseInt(target, 10) || 0);

    function frame(now) {
      const elapsed = now - start;
      const t = Math.min(1, elapsed / duration);
      const eased = easeOutCubic(t);
      const current = Math.round(from + (to - from) * eased);

      // Leading zeros + optional suffix (only at the end show suffix)
      const padded = String(current).padStart(digits, "0");
      numEl.textContent = t < 1 ? padded : String(to).padStart(digits, "0") + (suffix || "");

      if (t < 1) {
        requestAnimationFrame(frame);
      }
    }
    requestAnimationFrame(frame);
  }

  // Trigger on enter using IntersectionObserver
  const io = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting && !started) {
          started = true;
          animateCount();
          io.unobserve(entry.target);
        }
      });
    },
    { threshold }
  );

  io.observe(sectionEl);
}
