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
		<div class="footer__top">
			<div class="footer__brand">
				<p class="footer__logo">✦ Grace Foundation</p>
				<p class="footer__tagline">Compassionate healing for women, by a community that cares.</p>
				<div class="footer__social">
					<a href="#" aria-label="Instagram">Ig</a>
					<a href="#" aria-label="Facebook">Fb</a>
					<a href="#" aria-label="LinkedIn">Li</a>
				</div>
			</div>
			<div class="footer__links">
				<div class="footer__col">
					<h4>Foundation</h4>
					<a href="#about">About Us</a>
					<a href="#programs">Our Programmes</a>
					<a href="#stories">Stories</a>
					<a href="contact.html">Contact</a>
				</div>
				<div class="footer__col">
					<h4>Programmes</h4>
					<a href="#">Residential Retreat</a>
					<a href="#">Group Circles</a>
					<a href="#">Individual Therapy</a>
					<a href="#">Holistic Wellness</a>
				</div>
				<div class="footer__col">
					<h4>Get Help Now</h4>
					<p class="footer__helpline">Crisis Line</p>
					<a href="tel:+9779876765432" class="footer__phone">+977 9876 765432</a>
					<p class="footer__hours">Available 24/7</p>
					<a href="contact.html" class="btn btn--primary btn--sm" style="margin-top:1rem">Contact Us</a>
				</div>
			</div>
		</div>
		<div class="footer__bottom">
			<p>© 2025 Grace Foundation. All rights reserved. | <a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a></p>
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>