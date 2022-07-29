<?php
function hughesco_enqueue_theme_assets_test() {
    wp_enqueue_style('hughesco-test', get_stylesheet_directory_uri() . '/assets/styles/test.css');

}

add_action( 'wp_enqueue_scripts', 'hughesco_enqueue_theme_assets_test', 9999 );

?>

<footer>
	<div class="container">
		<div class="row footer-content">
			<div class="col-12 col-lg-6 col-xl-3 order-1 order-xl-1 footer-logo">
				<?php echo file_get_contents(get_stylesheet_directory() . '/assets/images/svg/logo.svg'); ?>
				<p>
					Hughes & Co offer full-scope PR communications and marketing services across the superyacht sector.
				</p>
			</div>
			<div class="footer-menu col-12 col-md-6 col-xl-2 order-4 order-xl-2">
			</div>
			<div class="col-12 col-md-6 col-xl-3 order-3 order-xl-3">
				<div class="footer-contact">
					<div class="contact-info">

						<p>
							<a href="mailto:hello@roxannehughes.com">hello@roxannehughes.com</a>
						</p>
						<p><a href="tel:+44 (0) 7713 891 945">+44 (0) 7713 891 945</a> </p>

					</div>

					<div class="contact-social">
						<a href="https://www.instagram.com/superyachtrox/" target="_blank" class="social-link">
							<?php echo file_get_contents(get_stylesheet_directory() . '/assets/images/svg/fb.svg'); ?>
						</a>
						<a href="https://www.linkedin.com/in/roxanne-hughes-76181a56/" target="_blank" class="social-link">
							<?php echo file_get_contents(get_stylesheet_directory() . '/assets/images/svg/linkedin.svg'); ?>
						</a>


					</div>
				</div>

			</div>
			<div class="col-12 col-lg-6 col-xl-4 order-2 order-xl-4 footer-form">
				<div class="wrap">
					<p class="footer-title">Join our network</p>
					<?php echo do_shortcode('[contact-form-7 id="54" title="Untitled"]'); ?>
				</div>

			</div>
		</div>
		<div class="row under-footer">
			<div class="col-12 col-xl-6 order-3 order-xl-1">
				<p class="copyright">© Copyright Hughes & Co. 2022. All rights reserved.</p>
			</div>
			<div class="col-6 col-xl-3 text-xl-right order-1 order-xl-2">
				<a class="internal-link" href="<?php echo get_privacy_policy_url(); ?>">Privacy Policy</a>
			</div>
			<div class="col-6 col-xl-3 text-xl-right order-2 order-xl-3">
				<a class="internal-link" href="<?php echo get_site_url(null, 'terms-conditions'); ?>">Terms and conditions</a>
			</div>
			<div class="col-12 col-xl-6 order-4 order-xl-4">
				<p class="copyright-excerpt">Website designed and created by <a href="https://discoverglobal.co.uk" target="_blank">Global</a>.</p>
			</div>
			<div class="col-12 col-xl-6 order-5 order-xl-5 text-xl-right">
				<p class="copyright-excerpt">Photos courtesy of Breed Media.</p>
			</div>
		</div>
	</div>
</footer>


