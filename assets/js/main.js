/* ═══════════════════════════════════════════
   GRACE FOUNDATION — script.js
   - Lenis smooth scroll
   - Scroll reveal
   - Custom cursor
   - Sticky nav
   - Testimonial slider
   - Mobile menu
═══════════════════════════════════════════ */

// ─── LENIS SMOOTH SCROLL ───
const lenis = new Lenis({
  duration: 1.4,
  easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
  direction: 'vertical',
  gestureDirection: 'vertical',
  smooth: true,
  smoothTouch: false,
  touchMultiplier: 2,
});

function raf(time) {
  lenis.raf(time);
  requestAnimationFrame(raf);
}
requestAnimationFrame(raf);

// Make anchor links work with Lenis
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener('click', function (e) {
    const href = this.getAttribute('href');
    if (href === '#') return;
    const target = document.querySelector(href);
    if (target) {
      e.preventDefault();
      lenis.scrollTo(target, { offset: -80, duration: 1.6 });
    }
  });
});


// ─── CUSTOM CURSOR ───
const cursor = document.getElementById('cursor');
const cursorFollower = document.getElementById('cursorFollower');

let mouseX = 0, mouseY = 0;
let followerX = 0, followerY = 0;

document.addEventListener('mousemove', (e) => {
  mouseX = e.clientX;
  mouseY = e.clientY;
  cursor.style.left = mouseX + 'px';
  cursor.style.top  = mouseY + 'px';
});

function animateFollower() {
  followerX += (mouseX - followerX) * 0.1;
  followerY += (mouseY - followerY) * 0.1;
  cursorFollower.style.left = followerX + 'px';
  cursorFollower.style.top  = followerY + 'px';
  requestAnimationFrame(animateFollower);
}
animateFollower();

// Cursor grow on hover
const hoverTargets = document.querySelectorAll('a, button, .program-card, .story-card, .dot');
hoverTargets.forEach((el) => {
  el.addEventListener('mouseenter', () => {
    cursor.style.transform = 'translate(-50%, -50%) scale(2.5)';
    cursor.style.background = 'var(--dusty-rose)';
    cursorFollower.style.opacity = '0.2';
    cursorFollower.style.transform = 'translate(-50%, -50%) scale(1.6)';
  });
  el.addEventListener('mouseleave', () => {
    cursor.style.transform = 'translate(-50%, -50%) scale(1)';
    cursor.style.background = 'var(--sage-dark)';
    cursorFollower.style.opacity = '0.6';
    cursorFollower.style.transform = 'translate(-50%, -50%) scale(1)';
  });
});


// ─── STICKY NAVBAR ───
const navbar = document.getElementById('navbar');
lenis.on('scroll', ({ scroll }) => {
  if (scroll > 60) {
    navbar.classList.add('scrolled');
  } else {
    navbar.classList.remove('scrolled');
  }
});


// ─── SCROLL REVEAL ───
const revealEls = document.querySelectorAll('.reveal');

const revealObserver = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        revealObserver.unobserve(entry.target);
      }
    });
  },
  { threshold: 0.12 }
);

revealEls.forEach((el) => revealObserver.observe(el));


// ─── TESTIMONIAL SLIDER ───
const cards = document.querySelectorAll('.story-card');
const dots  = document.querySelectorAll('.dot');
let currentSlide = 0;
let autoSlide;

function goToSlide(index) {
  cards[currentSlide].classList.remove('active');
  dots[currentSlide].classList.remove('active');
  currentSlide = (index + cards.length) % cards.length;
  cards[currentSlide].classList.add('active');
  dots[currentSlide].classList.add('active');
}

dots.forEach((dot) => {
  dot.addEventListener('click', () => {
    clearInterval(autoSlide);
    goToSlide(parseInt(dot.dataset.i));
    startAutoSlide();
  });
});

function startAutoSlide() {
  autoSlide = setInterval(() => {
    goToSlide(currentSlide + 1);
  }, 5000);
}
startAutoSlide();


// ─── MOBILE MENU ───
const hamburger = document.getElementById('hamburger');
const mobileMenu = document.getElementById('mobileMenu');
let menuOpen = false;

hamburger.addEventListener('click', () => {
  menuOpen = !menuOpen;
  mobileMenu.classList.toggle('open', menuOpen);

  // Animate hamburger to X
  const spans = hamburger.querySelectorAll('span');
  if (menuOpen) {
    spans[0].style.transform = 'rotate(45deg) translate(5px, 5px)';
    spans[1].style.opacity = '0';
    spans[2].style.transform = 'rotate(-45deg) translate(5px, -5px)';
    lenis.stop();
  } else {
    spans[0].style.transform = '';
    spans[1].style.opacity = '';
    spans[2].style.transform = '';
    lenis.start();
  }
});

function closeMobile() {
  menuOpen = false;
  mobileMenu.classList.remove('open');
  const spans = hamburger.querySelectorAll('span');
  spans[0].style.transform = '';
  spans[1].style.opacity = '';
  spans[2].style.transform = '';
  lenis.start();
}

// Close mobile menu on outside click
document.addEventListener('click', (e) => {
  if (menuOpen && !mobileMenu.contains(e.target) && !hamburger.contains(e.target)) {
    closeMobile();
  }
});


// ─── PROGRAM CARD STAGGER ON ENTER ───
const programCards = document.querySelectorAll('.program-card');
const cardObserver = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const delay = parseInt(entry.target.dataset.delay || 0);
        setTimeout(() => {
          entry.target.classList.add('visible');
        }, delay);
        cardObserver.unobserve(entry.target);
      }
    });
  },
  { threshold: 0.1 }
);
programCards.forEach((card) => cardObserver.observe(card));


// ─── PARALLAX HERO BLOBS (subtle) ───
document.addEventListener('mousemove', (e) => {
  const cx = window.innerWidth / 2;
  const cy = window.innerHeight / 2;
  const dx = (e.clientX - cx) / cx;
  const dy = (e.clientY - cy) / cy;

  const blob1 = document.querySelector('.hero__blob--1');
  const blob2 = document.querySelector('.hero__blob--2');
  const blob3 = document.querySelector('.hero__blob--3');

  if (blob1) blob1.style.transform = `translate(${dx * 18}px, ${dy * 12}px)`;
  if (blob2) blob2.style.transform = `translate(${-dx * 14}px, ${-dy * 10}px)`;
  if (blob3) blob3.style.transform = `translate(${dx * 10}px, ${dy * 16}px)`;
});