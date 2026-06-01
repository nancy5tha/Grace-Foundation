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
    <section class="hero-slider-section">
        <div class="hero-slider">
            <!-- Slide 1 -->
            <div class="hero-slide">
                <div class="hero-bg" style="background-image: url('https://images.unsplash.com/photo-1448375240586-882707db888b?auto=format&fit=crop&w=1920&q=80');"></div>
                <div class="hero-overlay"></div>
                <div class="hero-content">
                    <span class="hero-tag"><span class="hero-tag-dot"></span><?php esc_html_e('A Safe Haven for Healing', 'grace-foundation'); ?></span>
                    <h1><?php echo wp_kses(__('A Sanctuary for Hope &amp; <em>Restoration</em>', 'grace-foundation'), array('em' => array())); ?></h1>
                    <p><?php esc_html_e('At Grace Foundation, we offer a dedicated, supportive environment for women ready to reclaim their lives, health, and inner strength.', 'grace-foundation'); ?></p>
                    <div class="hero-btns">
                        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary"><?php esc_html_e('Get Confidential Help', 'grace-foundation'); ?></a>
                        <a href="<?php echo esc_url(home_url('/about/')); ?>" class="btn btn-ghost"><?php esc_html_e('Learn More About Us', 'grace-foundation'); ?></a>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="hero-slide">
                <div class="hero-bg" style="background-image: url('https://images.unsplash.com/photo-1502082553048-f009c37129b9?auto=format&fit=crop&w=1920&q=80');"></div>
                <div class="hero-overlay"></div>
                <div class="hero-content">
                    <span class="hero-tag"><span class="hero-tag-dot"></span><?php esc_html_e('Comprehensive Support', 'grace-foundation'); ?></span>
                    <h1><?php echo wp_kses(__('Rewrite Your Story with <em>Confidence</em>', 'grace-foundation'), array('em' => array())); ?></h1>
                    <p><?php esc_html_e('Through evidence-based clinical therapy, peer support, and holistic skill-building, we empower women to build lasting recovery.', 'grace-foundation'); ?></p>
                    <div class="hero-btns">
                        <a href="<?php echo esc_url(home_url('/services/')); ?>" class="btn btn-primary"><?php esc_html_e('Explore Our Programs', 'grace-foundation'); ?></a>
                        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-ghost"><?php esc_html_e('Connect With Us', 'grace-foundation'); ?></a>
                    </div>
                </div>
            </div>
            <!-- Slide 3 -->
            <div class="hero-slide">
                <div class="hero-bg" style="background-image: url('https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05?auto=format&fit=crop&w=1920&q=80');"></div>
                <div class="hero-overlay"></div>
                <div class="hero-content">
                    <span class="hero-tag"><span class="hero-tag-dot"></span><?php esc_html_e('Nurturing Environment', 'grace-foundation'); ?></span>
                    <h1><?php echo wp_kses(__('A Safe Harbor for <em>Body &amp; Spirit</em>', 'grace-foundation'), array('em' => array())); ?></h1>
                    <p><?php esc_html_e('We provide medical oversight, tailored psychological counseling, and secure accommodations tailored specifically to women\'s needs.', 'grace-foundation'); ?></p>
                    <div class="hero-btns">
                        <a href="<?php echo esc_url(home_url('/contact/#emergency')); ?>" class="btn btn-primary"><?php esc_html_e('24/7 Helpline', 'grace-foundation'); ?></a>
                        <a href="<?php echo esc_url(home_url('/services/')); ?>" class="btn btn-ghost"><?php esc_html_e('View Medical Support', 'grace-foundation'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 2. About Preview Section -->
    <section class="about-preview section-pad">
        <div class="container">
            <div class="about-preview-inner reveal">
                <!-- Left: Image -->
                <div class="about-img-wrap">
                    <div class="about-img-container">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=800&q=80" alt="<?php esc_attr_e('Compassionate Caregiver at Grace Foundation', 'grace-foundation'); ?>">
                    </div>
                    <div class="about-img-badge reveal reveal-delay-2">
                        <div class="badge-num">10+</div>
                        <div class="badge-label"><?php echo wp_kses(__('Years of<br>Restoring Hope', 'grace-foundation'), array('br' => array())); ?></div>
                    </div>
                </div>

                <!-- Right: Content -->
                <div class="about-text">
                    <span class="section-label"><?php esc_html_e('Welcome to Grace', 'grace-foundation'); ?></span>
                    <h2><?php esc_html_e('A Compassionate Community Built Upon Dignity &amp; Respect', 'grace-foundation'); ?></h2>
                    <p><?php esc_html_e('Grace Foundation was founded with a singular, profound mission: to offer women facing addiction, trauma, and life challenges a peaceful, structured space to rebuild their lives. We believe that true rehabilitation encompasses not just physical sobriety, but the nurturing of mental, emotional, and social well-being.', 'grace-foundation'); ?></p>

                    <div class="mission-block">
                        <p><?php esc_html_e('"Our vision is an inclusive world where every woman possesses the tools, support, and hope needed to bloom anew."', 'grace-foundation'); ?></p>
                    </div>

                    <p><?php esc_html_e('We combine qualified clinical interventions with peer guidance and real-world skill-building programs. Here, we honor your history while actively empowering your future.', 'grace-foundation'); ?></p>
                    <a href="<?php echo esc_url(home_url('/about/')); ?>" class="btn btn-primary mt-2"><?php esc_html_e('Read More About Us', 'grace-foundation'); ?></a>
                </div>
            </div>
        </div>
    </section>
    <!-- 3. Services Section -->
    <section class="services-section section-pad">
        <div class="container">
            <div class="services-header text-center reveal">
                <span class="section-label"><?php esc_html_e('How We Support You', 'grace-foundation'); ?></span>
                <h2><?php esc_html_e('Our Specialized Care Programs', 'grace-foundation'); ?></h2>
                <p><?php esc_html_e('Every woman\'s journey to recovery is uniquely her own. We provide individualized care modules to support every stage of rehabilitation and growth.', 'grace-foundation'); ?></p>
            </div>

            <div class="services-grid">
                <!-- Card 1: Women Rehabilitation -->
                <div class="service-card reveal reveal-delay-1">
                    <div class="service-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2a10 10 0 0 0-10 10c0 5.523 4.477 10 10 10s10-4.477 10-10A10 10 0 0 0 12 2Z" />
                            <path d="M12 6v12" />
                            <path d="M8 10h8" />
                        </svg>
                    </div>
                    <h3><?php esc_html_e('Women Rehabilitation', 'grace-foundation'); ?></h3>
                    <p><?php esc_html_e('A specialized, residential program centered on female-focused addiction recovery, ensuring physical detox, biological stabilization, and structured daily healthy habits.', 'grace-foundation'); ?></p>
                    <a href="<?php echo esc_url(home_url('/services/#rehab')); ?>" class="service-link"><?php esc_html_e('Learn More', 'grace-foundation'); ?> <i class="fa-solid fa-arrow-right"></i></a>
                </div>
                <!-- Card 2: Counseling & Therapy -->
                <div class="service-card reveal reveal-delay-2">
                    <div class="service-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
                        </svg>
                    </div>
                    <h3><?php esc_html_e('Counseling &amp; Therapy', 'grace-foundation'); ?></h3>
                    <p><?php esc_html_e('One-on-one psychological counseling, cognitive behavioral therapy (CBT), and trauma-informed group sessions targeting emotional roots and resilience.', 'grace-foundation'); ?></p>
                    <a href="<?php echo esc_url(home_url('/services/#therapy')); ?>" class="service-link"><?php esc_html_e('Learn More', 'grace-foundation'); ?> <i class="fa-solid fa-arrow-right"></i></a>
                </div>
                <!-- Card 3: Shelter & Safety -->
                <div class="service-card reveal reveal-delay-3">
                    <div class="service-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                            <polyline points="9 22 9 12 15 12 15 22" />
                        </svg>
                    </div>
                    <h3><?php esc_html_e('Shelter &amp; Safety', 'grace-foundation'); ?></h3>
                    <p><?php esc_html_e('Secure, serene, and clean residential accommodations that provide a comforting physical sanctuary away from hostile environments and negative triggers.', 'grace-foundation'); ?></p>
                    <a href="<?php echo esc_url(home_url('/services/#shelter')); ?>" class="service-link"><?php esc_html_e('Learn More', 'grace-foundation'); ?> <i class="fa-solid fa-arrow-right"></i></a>
                </div>
                <!-- Card 4: Skill Development -->
                <div class="service-card reveal reveal-delay-4">
                    <div class="service-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 20h9" />
                            <path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4Z" />
                        </svg>
                    </div>
                    <h3><?php esc_html_e('Skill Programs', 'grace-foundation'); ?></h3>
                    <p><?php esc_html_e('Vocational training, creative expression workshops, computer literacy, and transitional job placements that prepare women for self-reliant reintegration.', 'grace-foundation'); ?></p>
                    <a href="<?php echo esc_url(home_url('/services/#skills')); ?>" class="service-link"><?php esc_html_e('Learn More', 'grace-foundation'); ?> <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- 4. Success Stories Slider (Slick) -->
    <section class="testimonials-section section-pad">
        <div class="container">
            <div class="section-header text-center reveal">
                <span class="section-label"><?php esc_html_e('Stories of Hope', 'grace-foundation'); ?></span>
                <h2><?php esc_html_e('Journeys to Restoration', 'grace-foundation'); ?></h2>
                <p><?php esc_html_e('Nothing builds confidence like the voice of experience. Read respectful, anonymous testimonials from the women who stepped into their new beginnings with us.', 'grace-foundation'); ?></p>
            </div>

            <div class="testimonials-slider reveal mt-3">
                <!-- Testimonial 1 -->
                <div class="testimonial-card">
                    <div class="testimonial-text">
                        <?php esc_html_e('"Before arriving at Grace, I felt entirely lost in a loop of addiction and fear. The all-female community here made me feel safe from day one. I wasn\'t just treated; I was truly listened to, loved, and given my dignity back. Today, I am 2 years sober and running my own small floral business."', 'grace-foundation'); ?>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                            </svg>
                        </div>
                        <div>
                            <div class="author-name"><?php esc_html_e('Sarah M.', 'grace-foundation'); ?></div>
                            <div class="author-tag"><?php esc_html_e('Alumna (Graduated 2024)', 'grace-foundation'); ?></div>
                        </div>
                    </div>
                </div>
                <!-- Testimonial 2 -->
                <div class="testimonial-card">
                    <div class="testimonial-text">
                        <?php esc_html_e('"The individual psychological counseling at Grace was a turning point. It helped me unpack decades of trauma that fueled my unhealthy habits. The skill training programs gave me active vocational credentials and, more importantly, self-respect. Reintegration was smooth, and my family is whole again."', 'grace-foundation'); ?>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                            </svg>
                        </div>
                        <div>
                            <div class="author-name"><?php esc_html_e('Elena R.', 'grace-foundation'); ?></div>
                            <div class="author-tag"><?php esc_html_e('Alumna (Graduated 2023)', 'grace-foundation'); ?></div>
                        </div>
                    </div>
                </div>
                <!-- Testimonial 3 -->
                <div class="testimonial-card">
                    <div class="testimonial-text">
                        <?php esc_html_e('"Finding a dedicated shelter specifically for women was my saving grace. The staff here operate with absolute compassion, absolute professionalism, and zero judgment. I found strength in my fellow sisters. If you are struggling, please take that first step and call them. Life can beautiful again."', 'grace-foundation'); ?>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                            </svg>
                        </div>
                        <div>
                            <div class="author-name"><?php esc_html_e('Jane D.', 'grace-foundation'); ?></div>
                            <div class="author-tag"><?php esc_html_e('Alumna (Graduated 2025)', 'grace-foundation'); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 5. Call to Action Banner -->
    <section class="cta-banner">
        <div class="container">
            <div class="cta-inner reveal">
                <h2><?php esc_html_e('You are not alone. Help is available.', 'grace-foundation'); ?></h2>
                <p><?php esc_html_e('Reclaiming your life is a journey, and every step counts. Our compassionate team of professionals is ready to support you in absolute confidentiality.', 'grace-foundation'); ?></p>
                <div class="cta-btns">
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-white"><?php esc_html_e('Get in Touch Confidentiality', 'grace-foundation'); ?></a>
                    <a href="tel:+18005554722" class="btn btn-ghost"><i class="fa-solid fa-phone"></i> <?php esc_html_e('Call 1-800-555-GRACE', 'grace-foundation'); ?></a>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- 1. Hero Section (Slick Slider Banner) -->
<section class="hero-slider-section">
    <div class="hero-slider">
        <!-- Slide 1 -->
        <div class="hero-slide">
            <div class="hero-bg" style="background-image: url('https://images.unsplash.com/photo-1448375240586-882707db888b?auto=format&fit=crop&w=1920&q=80');"></div>
            <div class="hero-overlay"></div>
            <div class="hero-content">
                <span class="hero-tag"><span class="hero-tag-dot"></span>A Safe Haven for Healing</span>
                <h1>A Sanctuary for Hope &amp; <em>Restoration</em></h1>
                <p>At Grace Foundation, we offer a dedicated, supportive environment for women ready to reclaim their lives, health, and inner strength.</p>
                <div class="hero-btns">
                    <a href="contact.html" class="btn btn-primary">Get Confidential Help</a>
                    <a href="about.html" class="btn btn-ghost">Learn More About Us</a>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="hero-slide">
            <div class="hero-bg" style="background-image: url('https://images.unsplash.com/photo-1502082553048-f009c37129b9?auto=format&fit=crop&w=1920&q=80');"></div>
            <div class="hero-overlay"></div>
            <div class="hero-content">
                <span class="hero-tag"><span class="hero-tag-dot"></span>Comprehensive Support</span>
                <h1>Rewrite Your Story with <em>Confidence</em></h1>
                <p>Through evidence-based clinical therapy, peer support, and holistic skill-building, we empower women to build lasting recovery.</p>
                <div class="hero-btns">
                    <a href="services.html" class="btn btn-primary">Explore Our Programs</a>
                    <a href="contact.html" class="btn btn-ghost">Connect With Us</a>
                </div>
            </div>
        </div>
        <!-- Slide 3 -->
        <div class="hero-slide">
            <div class="hero-bg" style="background-image: url('https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05?auto=format&fit=crop&w=1920&q=80');"></div>
            <div class="hero-overlay"></div>
            <div class="hero-content">
                <span class="hero-tag"><span class="hero-tag-dot"></span>Nurturing Environment</span>
                <h1>A Safe Harbor for <em>Body &amp; Spirit</em></h1>
                <p>We provide medical oversight, tailored psychological counseling, and secure accommodations tailored specifically to women's needs.</p>
                <div class="hero-btns">
                    <a href="contact.html#emergency" class="btn btn-primary">24/7 Helpline</a>
                    <a href="services.html" class="btn btn-ghost">View Medical Support</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- 2. About Preview Section -->
<section class="about-preview section-pad">
    <div class="container">
        <div class="about-preview-inner reveal">
            <!-- Left: Graphic + Floating Badge -->
            <div class="about-img-wrap">
                <div class="about-img-container">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=800&q=80" alt="Compassionate Caregiver at Grace Foundation">
                </div>
                <div class="about-img-badge reveal reveal-delay-2">
                    <div class="badge-num">10+</div>
                    <div class="badge-label">Years of<br>Restoring Hope</div>
                </div>
            </div>

            <!-- Right: Narrative content -->
            <div class="about-text">
                <span class="section-label">Welcome to Grace</span>
                <h2>A Compassionate Community Built Upon Dignity &amp; Respect</h2>
                <p>Grace Foundation was founded with a singular, profound mission: to offer women facing addiction, trauma, and life challenges a peaceful, structured space to rebuild their lives. We believe that true rehabilitation encompasses not just physical sobriety, but the nurturing of mental, emotional, and social well-being.</p>

                <div class="mission-block">
                    <p>"Our vision is an inclusive world where every woman possesses the tools, support, and hope needed to bloom anew."</p>
                </div>

                <p>We combine qualified clinical interventions with peer guidance and real-world skill-building programs. Here, we honor your history while actively empowering your future.</p>
                <a href="about.html" class="btn btn-primary mt-2">Read More About Us</a>
            </div>
        </div>
    </div>
</section>
<!-- 3. Services Section -->
<section class="services-section section-pad">
    <div class="container">
        <div class="services-header text-center reveal">
            <span class="section-label">How We Support You</span>
            <h2>Our Specialized Care Programs</h2>
            <p>Every woman's journey to recovery is uniquely her own. We provide individualized care modules to support every stage of rehabilitation and growth.</p>
        </div>

        <div class="services-grid">
            <!-- Card 1: Women Rehabilitation -->
            <div class="service-card reveal reveal-delay-1">
                <div class="service-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 2a10 10 0 0 0-10 10c0 5.523 4.477 10 10 10s10-4.477 10-10A10 10 0 0 0 12 2Z" />
                        <path d="M12 6v12" />
                        <path d="M8 10h8" />
                    </svg>
                </div>
                <h3>Women Rehabilitation</h3>
                <p>A specialized, residential program centered on female-focused addiction recovery, ensuring physical detox, biological stabilization, and structured daily healthy habits.</p>
                <a href="services.html#rehab" class="service-link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <!-- Card 2: Counseling & Therapy -->
            <div class="service-card reveal reveal-delay-2">
                <div class="service-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
                    </svg>
                </div>
                <h3>Counseling &amp; Therapy</h3>
                <p>One-on-one psychological counseling, cognitive behavioral therapy (CBT), and trauma-informed group sessions targeting emotional roots and resilience.</p>
                <a href="services.html#therapy" class="service-link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <!-- Card 3: Shelter & Safety -->
            <div class="service-card reveal reveal-delay-3">
                <div class="service-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                        <polyline points="9 22 9 12 15 12 15 22" />
                    </svg>
                </div>
                <h3>Shelter &amp; Safety</h3>
                <p>Secure, serene, and clean residential accommodations that provide a comforting physical sanctuary away from hostile environments and negative triggers.</p>
                <a href="services.html#shelter" class="service-link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <!-- Card 4: Skill Development -->
            <div class="service-card reveal reveal-delay-4">
                <div class="service-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 20h9" />
                        <path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4Z" />
                    </svg>
                </div>
                <h3>Skill Programs</h3>
                <p>Vocational training, creative expression workshops, computer literacy, and transitional job placements that prepare women for self-reliant reintegration.</p>
                <a href="services.html#skills" class="service-link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- 4. Success Stories Slider (Slick) -->
<section class="testimonials-section section-pad">
    <div class="container">
        <div class="section-header text-center reveal">
            <span class="section-label">Stories of Hope</span>
            <h2>Journeys to Restoration</h2>
            <p>Nothing builds confidence like the voice of experience. Read respectful, anonymous testimonials from the women who stepped into their new beginnings with us.</p>
        </div>

        <div class="testimonials-slider reveal mt-3">
            <!-- Testimonial 1 -->
            <div class="testimonial-card">
                <div class="testimonial-text">
                    "Before arriving at Grace, I felt entirely lost in a loop of addiction and fear. The all-female community here made me feel safe from day one. I wasn't just treated; I was truly listened to, loved, and given my dignity back. Today, I am 2 years sober and running my own small floral business."
                </div>
                <div class="testimonial-author">
                    <div class="author-avatar">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                            <circle cx="9" cy="7" r="4" />
                            <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        </svg>
                    </div>
                    <div>
                        <div class="author-name">Sarah M.</div>
                        <div class="author-tag">Alumna (Graduated 2024)</div>
                    </div>
                </div>
            </div>
            <!-- Testimonial 2 -->
            <div class="testimonial-card">
                <div class="testimonial-text">
                    "The individual psychological counseling at Grace was a turning point. It helped me unpack decades of trauma that fueled my unhealthy habits. The skill training programs gave me active vocational credentials and, more importantly, self-respect. Reintegration was smooth, and my family is whole again."
                </div>
                <div class="testimonial-author">
                    <div class="author-avatar">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                            <circle cx="9" cy="7" r="4" />
                            <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        </svg>
                    </div>
                    <div>
                        <div class="author-name">Elena R.</div>
                        <div class="author-tag">Alumna (Graduated 2023)</div>
                    </div>
                </div>
            </div>
            <!-- Testimonial 3 -->
            <div class="testimonial-card">
                <div class="testimonial-text">
                    "Finding a dedicated shelter specifically for women was my saving grace. The staff here operate with absolute compassion, absolute professionalism, and zero judgment. I found strength in my fellow sisters. If you are struggling, please take that first step and call them. Life can beautiful again."
                </div>
                <div class="testimonial-author">
                    <div class="author-avatar">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                            <circle cx="9" cy="7" r="4" />
                            <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        </svg>
                    </div>
                    <div>
                        <div class="author-name">Jane D.</div>
                        <div class="author-tag">Alumna (Graduated 2025)</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- 5. Call to Action Banner -->
<section class="cta-banner">
    <div class="container">
        <div class="cta-inner reveal">
            <h2>You are not alone. Help is available.</h2>
            <p>Reclaiming your life is a journey, and every step counts. Our compassionate team of professionals is ready to support you in absolute confidentiality.</p>
            <div class="cta-btns">
                <a href="contact.html" class="btn btn-white">Get in Touch Confidentiality</a>
                <a href="tel:+18005554722" class="btn btn-ghost"><i class="fa-solid fa-phone"></i> Call 1-800-555-GRACE</a>
            </div>
        </div>
    </div>
</section>
</main>
<?php



get_footer();
