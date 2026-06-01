document.addEventListener('DOMContentLoaded', () => {
    // --- Navigation Elements ---
    const navbar = document.querySelector('.navbar');
    const hamburger = document.querySelector('.hamburger');
    const mobileMenu = document.querySelector('.mobile-menu');
    const navLinks = document.querySelectorAll('.nav-link, .mobile-link');
    const scrollTopBtn = document.querySelector('.scroll-top');
    // --- 1. Sticky Navbar & Scroll-to-Top Visibility ---
    const handleScrollEffects = () => {
        const scrollPos = window.scrollY;
        // Sticky Navbar
        if (scrollPos > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
        // Scroll to Top Button
        if (scrollPos > 500) {
            scrollTopBtn.classList.add('visible');
        } else {
            scrollTopBtn.classList.remove('visible');
        }
    };
    window.addEventListener('scroll', handleScrollEffects);
    handleScrollEffects(); // Run on load in case of page refresh
    // Scroll to Top action
    if (scrollTopBtn) {
        scrollTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
    // --- 2. Mobile Menu Toggle ---
    if (hamburger && mobileMenu) {
        hamburger.addEventListener('click', (e) => {
            e.stopPropagation();
            hamburger.classList.toggle('open');
            mobileMenu.classList.toggle('open');
        });
        // Close mobile menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!mobileMenu.contains(e.target) && !hamburger.contains(e.target)) {
                hamburger.classList.remove('open');
                mobileMenu.classList.remove('open');
            }
        });
        // Close menu when clicking a link
        const mobileLinks = mobileMenu.querySelectorAll('.mobile-link');
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                hamburger.classList.remove('open');
                mobileMenu.classList.remove('open');
            });
        });
    }
    // --- 3. Active Nav Link Highlighter ---
    const highlightActiveLink = () => {
        const currentPath = window.location.pathname;
        const pageName = currentPath.split('/').pop() || 'index.html';
        navLinks.forEach(link => {
            const href = link.getAttribute('href');
            if (href === pageName) {
                link.classList.add('active');
            } else {
                link.classList.remove('active');
            }
        });
    };
    highlightActiveLink();
    // --- 4. Lenis Smooth Scroll ---
    let lenisInstance = null;
    if (typeof Lenis !== 'undefined') {
        lenisInstance = new Lenis({
            duration: 1.2,
            easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)), // standard fast-out/slow-in
            direction: 'vertical',
            gestureDirection: 'vertical',
            smooth: true,
            mouseMultiplier: 1,
            smoothTouch: false,
            touchMultiplier: 2,
            infinite: false,
        });
        // Synchronize Lenis scrolling with ScrollTrigger / ScrollMagic if needed
        function raf(time) {
            lenisInstance.raf(time);
            requestAnimationFrame(raf);
        }
        requestAnimationFrame(raf);
        // Smooth scroll to anchors nicely
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                const targetEl = document.querySelector(targetId);
                if (targetEl) {
                    lenisInstance.scrollTo(targetEl, {
                        offset: -80, // Offset for sticky navbar
                        immediate: false,
                        duration: 1.2
                    });
                }
            });
        });
    } else {
        console.warn('Lenis Smooth Scroll is not loaded. Falling back to native scrolling.');
    }
    // --- 5. Slick Sliders (requires jQuery) ---
    if (typeof $ !== 'undefined' && $.fn.slick) {
        // Hero Slider
        const $heroSlider = $('.hero-slider');
        if ($heroSlider.length) {
            $heroSlider.slick({
                autoplay: true,
                autoplaySpeed: 5000,
                fade: true,
                cssEase: 'cubic-bezier(0.4, 0, 0.2, 1)',
                speed: 1000,
                dots: true,
                arrows: true,
                infinite: true,
                pauseOnHover: false,
                prevArrow: '<button type="button" class="slick-prev"></button>',
                nextArrow: '<button type="button" class="slick-next"></button>',
            });
        }
        // Testimonials Slider
        const $testimonialsSlider = $('.testimonials-slider');
        if ($testimonialsSlider.length) {
            $testimonialsSlider.slick({
                autoplay: true,
                autoplaySpeed: 6000,
                speed: 800,
                dots: true,
                arrows: false,
                infinite: true,
                slidesToShow: 2,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 900,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        }
    } else {
        console.warn('jQuery or Slick Slider is not loaded. Sliders will not initialize.');
    }
    // --- 6. Scroll Reveal Animation (Intersection Observer) ---
    const revealElements = document.querySelectorAll('.reveal');
    if ('IntersectionObserver' in window && revealElements.length) {
        const revealObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target); // Trigger only once
                }
            });
        }, {
            root: null,
            threshold: 0.12, // Trigger when 12% is visible
            rootMargin: '0px 0px -40px 0px' // Offset slightly before element enters screen
        });
        revealElements.forEach(el => revealObserver.observe(el));
    } else {
        // Fallback for older browsers
        revealElements.forEach(el => el.classList.add('visible'));
    }
    // --- 7. Contact Form Handling ---
    const contactForm = document.getElementById('graceContactForm');
    const formFeedback = document.querySelector('.form-feedback');
    if (contactForm && formFeedback) {
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            // Clear previous feedback
            formFeedback.className = 'form-feedback';
            formFeedback.style.display = 'none';
            // Gather inputs
            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
            const message = document.getElementById('message').value.trim();
            // Client side validation
            if (!name || !email || !message) {
                formFeedback.textContent = 'Please fill out all required fields.';
                formFeedback.classList.add('error');
                formFeedback.style.display = 'block';
                return;
            }
            // Simple email validation regex
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                formFeedback.textContent = 'Please enter a valid email address.';
                formFeedback.classList.add('error');
                formFeedback.style.display = 'block';
                return;
            }
            // Success feedback animation & simulation
            const submitBtn = contactForm.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            submitBtn.disabled = true;
            submitBtn.innerHTML = 'Sending...';
            setTimeout(() => {
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalText;
                
                formFeedback.textContent = 'Thank you for reaching out. We have received your message and will respond with the utmost confidentiality shortly.';
                formFeedback.classList.add('success');
                formFeedback.style.display = 'block';
                contactForm.reset();
                // If Lenis smooth scroll exists, scroll to feedback smoothly
                if (lenisInstance) {
                    lenisInstance.scrollTo(formFeedback, {
                        offset: -120,
                        duration: 0.8
                    });
                }
            }, 1200);
        });
    }
});