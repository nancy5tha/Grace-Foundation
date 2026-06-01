<?php

/**
 * Template Name: Contact us

 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gracefoundation
 */

get_header();
?>


<main>
    <!-- Static Page Banner -->
    <section class="page-banner">
        <div class="page-banner-bg" style="background-image: url('https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05?auto=format&fit=crop&w=1920&q=80');"></div>
        <div class="page-banner-overlay"></div>
        <div class="container">
            <div class="page-banner-content">
                <span class="section-label">Reach Out in Safety</span>
                <h1>Connect With Our Team</h1>
                <div class="breadcrumb">
                    <a href="index.html">Home</a>
                    <span class="breadcrumb-sep">/</span>
                    <span class="breadcrumb-current">Contact Us</span>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section Grid -->
    <section class="contact-section section-pad">
        <div class="container">

            <!-- 24/7 Emergency crisis box on top of mobile viewports -->
            <div class="emergency-box reveal" id="emergency">
                <div class="emergency-box-header">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2" />
                        <line x1="12" y1="8" x2="12" y2="12" />
                        <line x1="12" y1="16" x2="12.01" y2="16" />
                    </svg>
                    <h4>24/7 Immediate Crisis Assistance</h4>
                </div>
                <p>If you or a loved one is facing an immediate mental health, drug dependency, or housing safety crisis, do not wait. We operate an absolute confidentiality, direct click-to-call helpline 24 hours a day, 7 days a week.</p>
                <a href="tel:+18005554722" class="emergency-phone"><i class="fa-solid fa-phone-volume"></i> 1-800-555-GRACE (4722)</a>
            </div>
            <div class="contact-grid">

                <!-- Left Column: Form -->
                <div class="contact-form-area reveal">
                    <h2>Confidential Inquiry Form</h2>
                    <p>Have questions about admissions, facilities, pricing, or custom therapy tracks? Send our counselors an email. We will reach out to you with the utmost confidentiality.</p>

                    <!-- Form response notifications -->
                    <div class="form-feedback"></div>

                    <form id="graceContactForm" action="#" method="POST" novalidate>
                        <!-- Row 1: Name and Email -->
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label" for="name">Your Name *</label>
                                <input class="form-input" type="text" id="name" name="name" placeholder="Sarah Jenkins" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email">Email Address *</label>
                                <input class="form-input" type="email" id="email" name="email" placeholder="sarah@example.com" required>
                            </div>
                        </div>
                        <!-- Row 2: Select inquiry type -->
                        <div class="form-group">
                            <label class="form-label" for="subject">How can we support you?</label>
                            <select class="form-select" id="subject" name="subject">
                                <option value="admissions">Clinical Admissions &amp; Pricing</option>
                                <option value="programs">Program Details &amp; Therapy Tracks</option>
                                <option value="visiting">Visiting Schedules &amp; Tours</option>
                                <option value="alumni">Alumni Networks &amp; Sponsorships</option>
                                <option value="general">General Support Inquiries</option>
                            </select>
                        </div>
                        <!-- Row 3: Message -->
                        <div class="form-group">
                            <label class="form-label" for="message">Confidential Message *</label>
                            <textarea class="form-textarea" id="message" name="message" placeholder="Please share your story, questions, or specific needs. All messages are encrypted and strictly confidential." required></textarea>
                        </div>
                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary mt-1">Submit Secured Inquiry</button>
                    </form>
                </div>
                <!-- Right Column: Info & Map -->
                <div class="contact-info reveal reveal-delay-2">
                    <h3>Our Sanctuary Location</h3>
                    <p>We are situated in a tranquil, peaceful valley shielded from city noises, offering clean mountain air and calming environments ideal for personal reflection and physical restoration.</p>

                    <div class="contact-items">
                        <!-- Item 1: Address -->
                        <div class="contact-item">
                            <div class="contact-item-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                                    <circle cx="12" cy="10" r="3" />
                                </svg>
                            </div>
                            <div>
                                <div class="contact-item-title">Physical Address</div>
                                <div class="contact-item-value">108 Healing Waters Parkway, Soothing Valley, CA 90210</div>
                            </div>
                        </div>
                        <!-- Item 2: Phone -->
                        <div class="contact-item">
                            <div class="contact-item-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                                </svg>
                            </div>
                            <div>
                                <div class="contact-item-title">General Admissions Office</div>
                                <div class="contact-item-value">1-800-555-GRACE (4722)</div>
                            </div>
                        </div>
                        <!-- Item 3: Email -->
                        <div class="contact-item">
                            <div class="contact-item-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                                    <polyline points="22,6 12,13 2,6" />
                                </svg>
                            </div>
                            <div>
                                <div class="contact-item-title">Secure Encrypted Email</div>
                                <div class="contact-item-value">admissions@gracefoundation.org</div>
                            </div>
                        </div>
                    </div>
                    <!-- Leaflet.js Interactive Map (CARTO Voyager theme matching the design) -->
                    <div class="map-placeholder mt-3" style="border:none; padding:0; overflow:hidden;">
                        <div id="contact-map"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- WORDPRESS TEMPLATE REFERENCE: FOOTER START (wp-theme/footer.php) -->
<!-- Scroll to Top Button -->
<button class="scroll-top" aria-label="Scroll back to top" id="scrollTopBtn">
    <svg viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2">
        <polyline points="18 15 12 9 6 15" />
    </svg>
</button>



<?php
get_footer();