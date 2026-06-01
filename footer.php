<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gracefoundation
 */

?>

<footer id="colophon" class="site-footer">
	<div class="container">
		<div class="footer-grid">
			<!-- Branding Col -->
			<div class="footer-brand">
				<a href="index.html" class="nav-logo">
					<svg width="34" height="34" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M50 15C55 35 75 40 90 50C70 55 60 75 50 85C40 75 30 55 10 50C25 40 45 35 50 15Z" fill="#7AA99F" />
						<path d="M50 30C52 45 68 50 78 58C62 62 55 75 50 82C45 75 38 62 22 58C32 50 48 45 50 30Z" fill="#5B8A82" />
						<path d="M50 45C51 55 60 58 66 64C54 66 52 75 50 80C48 75 46 66 34 64C40 58 49 55 50 45Z" fill="#FDFCFB" />
					</svg>
					<span class="footer-logo-name">GRACE</span>
				</a>
				<p>Grace Foundation provides clinical-grade rehabilitation, supportive housing, and structured psychological and medical programs engineered exclusively for women healing from trauma and substance dependency.</p>
				<div class="social-links">
					<a href="#" class="social-link" aria-label="Follow us on Facebook"><i class="fa-brands fa-facebook-f"></i></a>
					<a href="#" class="social-link" aria-label="Follow us on Instagram"><i class="fa-brands fa-instagram"></i></a>
					<a href="#" class="social-link" aria-label="Follow us on LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
				</div>
			</div>
			<!-- Quick Links -->
			<div class="footer-col">
				<h4>Grace Foundation</h4>
				<ul class="footer-links">
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About Us</a></li>
					<li><a href="services.html">Services &amp; Programs</a></li>
					<li><a href="contact.html">Contact Us</a></li>
				</ul>
			</div>
			<!-- Services Links -->
			<div class="footer-col">
				<h4>Our Programs</h4>
				<ul class="footer-links">
					<li><a href="services.html#rehab">Clinical Rehabilitation</a></li>
					<li><a href="services.html#therapy">Counseling &amp; Therapy</a></li>
					<li><a href="services.html#medical">Medical Support</a></li>
					<li><a href="services.html#skills">Transitional Skills</a></li>
				</ul>
			</div>
			<!-- Contact & Location -->
			<div class="footer-col">
				<h4>Confidential Contact</h4>
				<div class="footer-contact-item">
					<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
						<path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
						<circle cx="12" cy="10" r="3" />
					</svg>
					<span>108 Healing Waters Parkway,<br>Suite 200, Soothing Valley, CA 90210</span>
				</div>
				<div class="footer-contact-item">
					<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
						<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
					</svg>
					<span>1-800-555-GRACE<br>(1-800-555-4722)</span>
				</div>
				<div class="footer-contact-item">
					<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
						<path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
						<polyline points="22,6 12,13 2,6" />
					</svg>
					<span>help@gracefoundation.org</span>
				</div>
			</div>
		</div>
		<!-- Footer Bottom -->
		<div class="footer-bottom">
			<div class="footer-copy">
				&copy; 2026 Grace Foundation. All rights reserved. Registered 501(c)(3) Non-Profit.
			</div>
			<div class="footer-bottom-links">
				<a href="#">Privacy Policy</a>
				<a href="#">Terms of Service</a>
				<a href="#">Patient Rights</a>
			</div>
		</div>
	</div> 
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>