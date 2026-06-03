<?php

/**
 * Template Name: Homepage

 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gracefoundation
 */

get_header();
?>


<main>
    <!-- 1. Hero Section (Slick Slider Banner) -->
    <!-- ═══ CURSOR ═══ -->
  <div class="cursor" id="cursor"></div>
  <div class="cursor-follower" id="cursorFollower"></div>
 
  <!-- ═══ NAV ═══ -->
  <nav class="nav" id="navbar">
    <a href="index.html" class="nav__logo">
      <span class="nav__logo-icon">✦</span>
      Grace Foundation
    </a>
    <ul class="nav__links">
      <li><a href="index.html" class="nav__link active">Home</a></li>
      <li><a href="#about" class="nav__link">About</a></li>
      <li><a href="#programs" class="nav__link">Programs</a></li>
      <li><a href="#stories" class="nav__link">Stories</a></li>
      <li><a href="template-contactus.php" class="nav__link">Contact</a></li>
    </ul>
    <a href="template-contactus.php" class="btn btn--nav">Begin Your Journey</a>
    <button class="nav__hamburger" id="hamburger" aria-label="menu">
      <span></span><span></span><span></span>
    </button>
  </nav>
 
  <!-- Mobile Menu -->
  <div class="mobile-menu" id="mobileMenu">
    <ul>
      <li><a href="index.html" onclick="closeMobile()">Home</a></li>
      <li><a href="#about" onclick="closeMobile()">About</a></li>
      <li><a href="#programs" onclick="closeMobile()">Programs</a></li>
      <li><a href="#stories" onclick="closeMobile()">Stories</a></li>
      <li><a href="contact.html" onclick="closeMobile()">Contact</a></li>
    </ul>
  </div>
 
  <!-- ═══ HERO ═══ -->
  <section class="hero" id="home">
    <div class="hero__bg">
      <div class="hero__blob hero__blob--1"></div>
      <div class="hero__blob hero__blob--2"></div>
      <div class="hero__blob hero__blob--3"></div>
    </div>
    <div class="hero__content">
      <p class="hero__eyebrow reveal">Women's Rehabilitation & Healing</p>
      <h1 class="hero__title reveal">
        Reclaim<br/><em>Your Grace.</em><br/>Rebuild<br/>Your Life.
      </h1>
      <p class="hero__sub reveal">
        A sanctuary of compassionate care where women find the strength, support, and community to heal and flourish.
      </p>
      <div class="hero__actions reveal">
        <a href="contact.html" class="btn btn--primary">Start Your Journey</a>
        <a href="#about" class="btn btn--ghost">Our Story</a>
      </div>
    </div>
    <div class="hero__image-wrap reveal">
      <div class="hero__image-frame">
        <div class="hero__image-inner">
          <!-- Placeholder artistic image -->
          <div class="hero__image-placeholder">
            <div class="hero__figure"></div>
          </div>
        </div>
        <div class="hero__badge">
          <span class="hero__badge-num">500+</span>
          <span class="hero__badge-txt">Lives Transformed</span>
        </div>
      </div>
    </div>
    <div class="hero__scroll">
      <span>Scroll</span>
      <div class="hero__scroll-line"></div>
    </div>
  </section>
 
  <!-- ═══ MARQUEE ═══ -->
  <div class="marquee">
    <div class="marquee__track">
      <span>Healing ✦ Hope ✦ Renewal ✦ Community ✦ Strength ✦ Recovery ✦ Grace ✦ Compassion ✦ Healing ✦ Hope ✦ Renewal ✦ Community ✦ Strength ✦ Recovery ✦ Grace ✦ Compassion ✦</span>
    </div>
  </div>
 
  <!-- ═══ ABOUT ═══ -->
  <section class="about" id="about">
    <div class="about__inner">
      <div class="about__visual reveal">
        <div class="about__img-stack">
          <div class="about__img about__img--back"></div>
          <div class="about__img about__img--front">
            <div class="about__img-overlay"></div>
          </div>
        </div>
        <div class="about__stat-card reveal">
          <span class="about__stat-num">18+</span>
          <span class="about__stat-label">Years of Compassionate Service</span>
        </div>
      </div>
      <div class="about__text reveal">
        <p class="section-eyebrow">About Grace Foundation</p>
        <h2 class="section-title">Meet Our <em>Dedicated</em> Team of Healers</h2>
        <p class="about__body">
          Grace Foundation was born from a simple belief: every woman deserves a path back to herself. Our team of licensed therapists, counselors, and peer support specialists bring decades of experience and genuine compassion to every step of your recovery journey.
        </p>
        <p class="about__body">
          We honour the whole person — mind, body, and spirit — through evidence-based therapies, holistic wellness practices, and a community built on trust and understanding.
        </p>
        <div class="about__pillars">
          <div class="about__pillar">
            <div class="about__pillar-icon">◎</div>
            <div>
              <strong>Trauma-Informed Care</strong>
              <p>Healing with sensitivity and professional expertise.</p>
            </div>
          </div>
          <div class="about__pillar">
            <div class="about__pillar-icon">◎</div>
            <div>
              <strong>Women-Centred Space</strong>
              <p>A safe, empowering environment built for women.</p>
            </div>
          </div>
          <div class="about__pillar">
            <div class="about__pillar-icon">◎</div>
            <div>
              <strong>Lifelong Support</strong>
              <p>Our relationship doesn't end when treatment does.</p>
            </div>
          </div>
        </div>
        <a href="#programs" class="btn btn--primary">Explore Our Programs</a>
      </div>
    </div>
  </section>
 
  <!-- ═══ PROGRAMS ═══ -->
  <section class="programs" id="programs">
    <div class="programs__header reveal">
      <p class="section-eyebrow">What We Offer</p>
      <h2 class="section-title">Pathways to <em>Healing</em></h2>
      <p class="programs__sub">Tailored programs that meet you exactly where you are.</p>
    </div>
    <div class="programs__grid">
      <div class="program-card reveal" data-delay="0">
        <div class="program-card__icon">🌿</div>
        <h3>Residential Retreat</h3>
        <p>A structured, immersive in-residence programme providing 24/7 care, therapeutic support, and holistic healing in a serene setting.</p>
        <a href="contact.html" class="program-card__link">Learn More →</a>
      </div>
      <div class="program-card reveal" data-delay="100">
        <div class="program-card__icon">🤝</div>
        <h3>Group Circles</h3>
        <p>Guided group therapy sessions that build community, reduce isolation, and allow women to heal alongside others who truly understand.</p>
        <a href="contact.html" class="program-card__link">Learn More →</a>
      </div>
      <div class="program-card reveal" data-delay="200">
        <div class="program-card__icon">💠</div>
        <h3>Individual Therapy</h3>
        <p>One-on-one sessions with licensed counselors, tailored to your personal history, goals, and pace of recovery.</p>
        <a href="contact.html" class="program-card__link">Learn More →</a>
      </div>
      <div class="program-card reveal" data-delay="300">
        <div class="program-card__icon">🌸</div>
        <h3>Holistic Wellness</h3>
        <p>Yoga, mindfulness, art therapy, and nutritional guidance — nurturing your whole self beyond clinical recovery.</p>
        <a href="contact.html" class="program-card__link">Learn More →</a>
      </div>
      <div class="program-card reveal" data-delay="400">
        <div class="program-card__icon">📚</div>
        <h3>Skills & Reintegration</h3>
        <p>Life skills, vocational training, and community reconnection to empower sustainable, independent living post-recovery.</p>
        <a href="contact.html" class="program-card__link">Learn More →</a>
      </div>
      <div class="program-card reveal" data-delay="500">
        <div class="program-card__icon">💬</div>
        <h3>Family Healing</h3>
        <p>Guided sessions to rebuild trust and communication, bringing families together as a supportive foundation for lasting recovery.</p>
        <a href="contact.html" class="program-card__link">Learn More →</a>
      </div>
    </div>
  </section>
 
  <!-- ═══ PHILOSOPHY ═══ -->
  <section class="philosophy">
    <div class="philosophy__inner">
      <div class="philosophy__text reveal">
        <p class="section-eyebrow">Our Philosophy</p>
        <h2 class="section-title">Healing is Not <em>Linear —</em><br/>And That's Okay.</h2>
        <p>At Grace Foundation, we reject the idea of a single path to recovery. We walk alongside you through the setbacks, the milestones, and the quiet moments of progress. Our approach is gentle, persistent, and deeply human.</p>
        <div class="philosophy__numbers">
          <div class="philosophy__num reveal">
            <span class="big-num">94<sup>%</sup></span>
            <p>of residents report significant improvement in wellbeing within 90 days</p>
          </div>
          <div class="philosophy__num reveal">
            <span class="big-num">78<sup>%</sup></span>
            <p>maintain sobriety or sustained wellness 12 months after completing a programme</p>
          </div>
        </div>
      </div>
      <div class="philosophy__quote reveal">
        <blockquote>
          "The moment I walked through those doors, I stopped feeling like a problem to be solved — and started feeling like a person worth saving."
          <cite>— Sarah M., Programme Graduate 2023</cite>
        </blockquote>
      </div>
    </div>
  </section>
 
  <!-- ═══ TESTIMONIALS ═══ -->
  <section class="stories" id="stories">
    <div class="stories__header reveal">
      <p class="section-eyebrow">Real Stories</p>
      <h2 class="section-title">Voices of <em>Grace</em></h2>
    </div>
    <div class="stories__slider" id="storiesSlider">
      <div class="story-card active">
        <div class="story-card__quote">❝</div>
        <p>"Grace Foundation gave me more than sobriety — it gave me back my sense of self. The women I met there became my family. I'm five years clean and I still attend monthly circles."</p>
        <div class="story-card__author">
          <div class="story-card__avatar" style="background: var(--sage)"></div>
          <div>
            <strong>Amelia R.</strong>
            <span>Residential Programme, 2020</span>
          </div>
        </div>
      </div>
      <div class="story-card">
        <div class="story-card__quote">❝</div>
        <p>"I came in broken and left with tools, community, and hope. The therapists didn't just treat my addiction — they helped me understand why it happened and how to build a life I actually want to live."</p>
        <div class="story-card__author">
          <div class="story-card__avatar" style="background: var(--terracotta)"></div>
          <div>
            <strong>Priya K.</strong>
            <span>Individual Therapy & Wellness, 2022</span>
          </div>
        </div>
      </div>
      <div class="story-card">
        <div class="story-card__quote">❝</div>
        <p>"The family sessions changed everything. My daughter and I had been estranged for three years. Grace Foundation helped us find our way back to each other. I will be forever grateful."</p>
        <div class="story-card__author">
          <div class="story-card__avatar" style="background: var(--dusty-rose)"></div>
          <div>
            <strong>Margaret T.</strong>
            <span>Family Healing Programme, 2023</span>
          </div>
        </div>
      </div>
    </div>
    <div class="stories__dots" id="storyDots">
      <button class="dot active" data-i="0"></button>
      <button class="dot" data-i="1"></button>
      <button class="dot" data-i="2"></button>
    </div>
  </section>
 
  <!-- ═══ PROCESS ═══ -->
  <section class="process">
    <div class="process__header reveal">
      <p class="section-eyebrow">Getting Started</p>
      <h2 class="section-title">Your Path <em>Forward</em></h2>
    </div>
    <div class="process__steps">
      <div class="process__step reveal" data-delay="0">
        <div class="process__step-num">01</div>
        <h3>Reach Out</h3>
        <p>A single, confidential call or message is all it takes. Our intake team is available 24/7 — no judgement, only care.</p>
      </div>
      <div class="process__connector"></div>
      <div class="process__step reveal" data-delay="150">
        <div class="process__step-num">02</div>
        <h3>Assessment</h3>
        <p>A gentle, private assessment helps us understand your needs and match you with the right programme and team.</p>
      </div>
      <div class="process__connector"></div>
      <div class="process__step reveal" data-delay="300">
        <div class="process__step-num">03</div>
        <h3>Begin Healing</h3>
        <p>Your personalised plan begins. You are not alone — every step of the way, Grace Foundation walks with you.</p>
      </div>
    </div>
    <div class="process__cta reveal">
      <a href="contact.html" class="btn btn--primary btn--large">Take the First Step</a>
    </div>
  </section>
</main>
<?php



get_footer();
