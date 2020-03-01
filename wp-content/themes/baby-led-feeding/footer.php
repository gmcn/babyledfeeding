<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starting_Theme
 */

?>

	</div><!-- #content -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<footer>

		<div class="container-fluid footer_newsletter__main hidden-xs hidden-sm">
			<div class="container">
				<h3>FREE Recipes</h3>
				<p>The Baby Led Newsletter contains exclusive recipes, <br />meal plans and more to your inbox.</p>
				<!-- Begin Mailchimp Signup Form -->
					<div id="mc_embed_signup">
					<form action="https://digital-only.us19.list-manage.com/subscribe/post?u=15d8e8c82aaff87551e711d19&amp;id=d91a32e363" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				    <div id="mc_embed_signup_scroll">
							<div class="form-group">
								<input type="text" value="" name="FNAME" class="form-control" id="mce-FNAME" placeholder="First Name">
							</div>
							<div class="form-group">
								<input type="email" value="" name="EMAIL" class="form-control required email" id="mce-EMAIL" placeholder="Email">
							</div>

					  <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_15d8e8c82aaff87551e711d19_d91a32e363" tabindex="-1" value=""></div>
					    <div class="clear"><input type="submit" value="Sign Up" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
				    </div>
					</form>
					</div>
					<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
					<!--End mc_embed_signup-->
				<p>We never share your details or send spam. Ever!</p>

			</div><!-- /.newsletter -->
		</div>

		<div class="container-fluid footer_insta">
			<h3>On the Gram</h3>
			<p>What cool mums call Instagram</p>
			<?php echo do_shortcode('[instagram-feed]'); ?>
		</div><!-- /.insta_feed -->


		<div class="container-fluid footer_newsletter__main hidden-md hidden-lg">
			<div class="container">
				<h3>FREE Recipes</h3>
				<p>Exclusive recipes, meal plans and more to your inbox.</p>
				<!-- Begin Mailchimp Signup Form -->
					<div id="mc_embed_signup">
					<form action="https://digital-only.us19.list-manage.com/subscribe/post?u=15d8e8c82aaff87551e711d19&amp;id=d91a32e363" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				    <div id="mc_embed_signup_scroll">
							<div class="form-group">
								<input type="text" value="" name="FNAME" class="form-control" id="mce-FNAME" placeholder="First Name">
							</div>
							<div class="form-group">
								<input type="email" value="" name="EMAIL" class="form-control required email" id="mce-EMAIL" placeholder="Email">
							</div>

					  <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_15d8e8c82aaff87551e711d19_d91a32e363" tabindex="-1" value=""></div>
					    <div class="clear"><input type="submit" value="Sign Up" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
				    </div>
					</form>
					</div>
					<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
					<!--End mc_embed_signup-->
				<p>We never share your details or send spam. Ever!</p>

			</div><!-- /.container -->

		</div><!-- /.container-fluid -->





		<div class="container sig">
			<div class="row">
				<div class="col-sm-6 col-md-4 sig_brand hidden-xs">
					<a href="/">
						<img src="<?php echo get_template_directory_uri() ?>/images/babyledfeeding-branding_footer.svg" alt="Baby Led Feeding">
					</a>

				</div>
				<div class="col-sm-6 col-md-4 sig_social">
					<p>Let's be Best Friends</p>
					<div class="row">
						<div class="col-xs-3">
							<img src="<?php echo get_template_directory_uri() ?>/images/facebook-icon_footer.svg" alt="Lets be friends on Facebook">
						</div>
						<div class="col-xs-3">
							<img src="<?php echo get_template_directory_uri() ?>/images/instagram-icon_footer.svg" alt="Lets be friends on Instagram">
						</div>
						<div class="col-xs-3">
							<img src="<?php echo get_template_directory_uri() ?>/images/pinterest-icon_footer.svg" alt="Lets be friends on Pinterest">
						</div>
						<div class="col-xs-3">
							<img src="<?php echo get_template_directory_uri() ?>/images/youtube-icon_footer.svg" alt="Lets be friends on Youtube">
						</div>
					</div>

				</div>
				<div class="col-md-4 col-lg-3 col-lg-offset-1 footer_newsletter hidden-xs hidden-sm">
					<p>Newsletter Signup</p>
					<!-- Begin Mailchimp Signup Form -->
						<div id="mc_embed_signup">
						<form action="https://digital-only.us19.list-manage.com/subscribe/post?u=15d8e8c82aaff87551e711d19&amp;id=d91a32e363" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					    <div id="mc_embed_signup_scroll">
								<div class="form-group">
									<input type="text" value="" name="FNAME" class="form-control" id="mce-FNAME" placeholder="First Name">
								</div>
								<div class="form-group">
									<input type="email" value="" name="EMAIL" class="form-control required email" id="mce-EMAIL" placeholder="Email">
								</div>

						  <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
						    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_15d8e8c82aaff87551e711d19_d91a32e363" tabindex="-1" value=""></div>
						    <div class="clear"><input type="submit" value="Sign Up" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
					    </div>
						</form>
						</div>
						<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
						<!--End mc_embed_signup-->
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-lg-8 sig_disclaimer">
					<p><span>Disclaimer:</span> <?php the_field('footer_disclaimer', 'option'); ?></p>
					<div class="clear hidden-md hidden-lg">
						<a href="/terms-condtions">Terms & Conditions</a> |
						<a href="/privacy-policy">Privacy Policy</a>
					</div>

				</div>
			</div>
			<div class="row sig_credit hidden-xs hidden-sm">
				<div class="col-md-8 sig_credit__copyright">
					<p>This site and all of its contents are the copyright of Baby Led Feeding</p>
				</div>
				<div class="col-md-4 sig_credit__byline">
					<p><img class="animated pulse infinite" src="<?php echo get_template_directory_uri() ?>/images/sweet-heart.svg" alt="">designed with love by <a href="https://www.sweet.ie" target="_blank">sweet.ie</a></p>
				</div>
			</div>
		</div>



	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
