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
    <!-- HERO -->
    <section class="contact-hero">
        <div class="contact-hero__blob contact-hero__blob--1"></div>
        <div class="contact-hero__blob contact-hero__blob--2"></div>
        <div class="contact-hero__inner reveal">
            <p class="section-eyebrow">Reach Out</p>
            <h1 class="section-title" style="font-size:clamp(2.8rem,6vw,5rem)">
                You Don't Have<br />to Walk This<br /><em>Alone.</em>
            </h1>
            <p class="contact-hero__sub">
                Whether you're ready to begin, just exploring options, or reaching out for a loved one — we are here. No judgement. Only care.
            </p>
        </div>
    </section>

    <!-- CRISIS BANNER -->
    <div class="crisis-banner reveal">
        <div class="crisis-banner__inner">
            <span class="crisis-banner__icon">🆘</span>
            <p><strong>In immediate crisis?</strong> Our helpline is available 24 hours a day, 7 days a week.</p>
            <a href="tel:+18005551234" class="btn btn--primary btn--sm">Call 1-800-555-1234</a>
        </div>
    </div>

    <!-- MAIN CONTACT SECTION -->
    <section class="contact-main">
        <div class="contact-main__inner">

            <!-- INFO PANEL -->
            <div class="contact-info reveal">
                <h2 class="contact-info__title">Get in <em>Touch</em></h2>
                <p class="contact-info__body">
                    Our intake coordinators are gentle, experienced, and ready to listen. Reach out by phone, email, or fill in the form — whichever feels right for you.
                </p>

                <div class="contact-detail">
                    <div class="contact-detail__icon">📞</div>
                    <div>
                        <span class="contact-detail__label">Phone</span>
                        <a href="tel:+18005551234" class="contact-detail__value">1-800-555-1234</a>
                        <span class="contact-detail__note">24/7 crisis &amp; intake line</span>
                    </div>
                </div>

                <div class="contact-detail">
                    <div class="contact-detail__icon">✉️</div>
                    <div>
                        <span class="contact-detail__label">Email</span>
                        <a href="mailto:hello@gracefoundation.org" class="contact-detail__value">hello@gracefoundation.org</a>
                        <span class="contact-detail__note">We respond within 24 hours</span>
                    </div>
                </div>

                <div class="contact-detail">
                    <div class="contact-detail__icon">📍</div>
                    <div>
                        <span class="contact-detail__label">Location</span>
                        <span class="contact-detail__value">Grace Foundation Centre</span>
                        <span class="contact-detail__note">123 Healing Garden Lane, Serenity, CA 90210</span>
                    </div>
                </div>

                <div class="contact-detail">
                    <div class="contact-detail__icon">🕐</div>
                    <div>
                        <span class="contact-detail__label">Office Hours</span>
                        <span class="contact-detail__value">Mon – Fri: 8am – 6pm</span>
                        <span class="contact-detail__note">Crisis line available 24/7</span>
                    </div>
                </div>

                <div class="contact-reassurance">
                    <div class="reassurance-item">
                        <span>🔒</span>
                        <p>All enquiries are completely confidential.</p>
                    </div>
                    <div class="reassurance-item">
                        <span>💚</span>
                        <p>No pressure, no judgement — ever.</p>
                    </div>
                    <div class="reassurance-item">
                        <span>🌿</span>
                        <p>We speak with you, not at you.</p>
                    </div>
                </div>
            </div>

            <!-- FORM PANEL -->
            <div class="contact-form-wrap reveal" data-delay="200">
                <div class="contact-form-card">
                    <h3 class="contact-form-card__title">Send Us a Message</h3>
                    <p class="contact-form-card__sub">Fill in whatever you're comfortable sharing. We'll take it from there.</p>

                    <div id="formSuccess" class="form-success" style="display:none;">
                        <span>🌿</span>
                        <h4>Thank you for reaching out.</h4>
                        <p>Your message has been received. A member of our team will be in touch within 24 hours. You are not alone.</p>
                    </div>

                    <div id="contactForm">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="firstName">First Name <span class="required">*</span></label>
                                <input type="text" id="firstName" placeholder="Your first name" required />
                            </div>
                            <div class="form-group">
                                <label for="lastName">Last Name</label>
                                <input type="text" id="lastName" placeholder="Your last name" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email">Email Address <span class="required">*</span></label>
                            <input type="email" id="email" placeholder="your@email.com" required />
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" placeholder="+1 (000) 000-0000" />
                        </div>

                        <div class="form-group">
                            <label for="enquiryType">Nature of Enquiry <span class="required">*</span></label>
                            <div class="select-wrap">
                                <select id="enquiryType" required>
                                    <option value="" disabled selected>Please select…</option>
                                    <option value="self">I am seeking help for myself</option>
                                    <option value="loved-one">I am seeking help for a loved one</option>
                                    <option value="programs">I want to learn about programmes</option>
                                    <option value="volunteer">I'd like to volunteer or support</option>
                                    <option value="media">Media / press enquiry</option>
                                    <option value="other">Other</option>
                                </select>
                                <span class="select-arrow">↓</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="message">Your Message <span class="required">*</span></label>
                            <textarea id="message" rows="5" placeholder="Share as little or as much as you'd like. We are here to listen." required></textarea>
                        </div>

                        <div class="form-group form-group--check">
                            <label class="checkbox-label">
                                <input type="checkbox" id="consent" required />
                                <span class="checkmark"></span>
                                I understand my information will be kept confidential and used only to respond to my enquiry.
                            </label>
                        </div>

                        <button type="button" class="btn btn--primary btn--large btn--full" id="submitBtn" onclick="submitForm()">
                            Send My Message
                        </button>

                        <p class="form-privacy">🔒 Your details are protected and never shared. <a href="#">Privacy Policy</a></p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- MAP / FIND US -->
    <section class="find-us reveal">
        <div class="find-us__inner">
            <div class="find-us__text">
                <p class="section-eyebrow">Find Us</p>
                <h2 class="section-title">Visit Our <em>Centre</em></h2>
                <p>Our healing centre is set in a calm, private location designed to feel safe, welcoming, and removed from daily pressures — a true sanctuary.</p>
                <div class="find-us__address">
                    <p>123 Healing Garden Lane</p>
                    <p>Serenity, California 90210</p>
                    <p>United States</p>
                </div>
                <a href="https://maps.google.com" target="_blank" class="btn btn--ghost" style="margin-top:2rem;">Get Directions →</a>
            </div>
            <div class="find-us__map">
                <!-- Decorative map placeholder -->
                <div class="map-placeholder">
                    <div class="map-placeholder__grid"></div>
                    <div class="map-placeholder__pin">
                        <div class="map-placeholder__dot"></div>
                        <div class="map-placeholder__ripple"></div>
                        <span>Grace Foundation</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    get_footer();
