<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starting_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.svg">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.svg">
<link type="text/plain" rel="robots" href="<?php echo get_template_directory_uri(); ?>/humans.txt" />
<link type="text/plain" rel="author" href="<?php echo get_template_directory_uri(); ?>/robots.txt" />
<link rel="canonical" href="<?php $current_url="https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; echo $current_url ?>" />
<?php wp_head(); ?>
<script type="text/javascript">
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-68092428-1', 'auto');
  ga('send', 'pageview');
</script>

<!-- Facebook Pixel Code -->
<script>
	!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
	n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
	document,'script','//connect.facebook.net/en_US/fbevents.js');

	fbq('init', '1669060696668998');
	fbq('track', "PageView");
</script>

<noscript>
	<img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1669060696668998&ev=PageView&noscript=1" />
</noscript>

<!-- End Facebook Pixel Code -->
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'starting-theme' ); ?></a>

	<header id="masthead" class="site-header navbar-fixed-top" role="banner">

    <div class="container">

    </div>

		<div class="row header_mobile__nav hidden-md hidden-lg">
			<div class="col-xs-3">
				<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse-grid">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="col-xs-6">
				<a href="/" class="site-branding">
					<img src="<?php echo get_template_directory_uri() ?>/images/babyledfeeding-branding_footer.svg" alt="Baby Led Feeding">
				</a>
			</div>

			<div class="col-xs-3">
        <a class="dropdown-toggle search hidden-xs hidden-sm" onclick="openSearch()">
          <img src="<?php echo get_template_directory_uri() ?>/images/search.svg" alt="Search Baby Led Feeding">
        </a>
				<a class="search" onclick="openSearch()">
					<img class="header_mobile__nav__search" src="<?php echo get_template_directory_uri() ?>/images/search.svg" alt="Search Baby Led Feeding">
				</a>
			</div>
		</div>

		<div class="container navbar navbar-default yamm">
          <div class="navbar-header hidden-xs hidden-sm">


						<a href="/" class="site-branding">
							<img class="fulllogo" src="<?php echo get_template_directory_uri() ?>/images/logo.svg" alt="Baby Led Feeding">
              <img class="halflogo hidden" src="<?php echo get_template_directory_uri() ?>/images/babyledfeeding-branding_footer.svg" alt="Baby Led Feeding">
						</a>


          </div>

            <ul class="nav navbar-nav navbar-right header_social hidden-sm hidden-xs">


								<li class="header_social__wrapper">Let's be Best Friends

									<img class="header_social__divide" src="<?php echo get_template_directory_uri(); ?>/images/social-divide.svg" alt="Baby Led Feeding" />

									<a class="header_social__icon" href="https://www.youtube.com/channel/UCyp_TJ38ejW-_pMWGOheF0Q/" target="_blank">

										<?php $facebookConents = file_get_contents(get_template_directory_uri() . '/images/youtube-icon_header.svg'); ?>

										<?php echo $facebookConents; ?>

									</a>

                  <a class="header_social__icon" href="https://www.pinterest.co.uk/babyledfeeding/" target="_blank">

										<?php $facebookConents = file_get_contents(get_template_directory_uri() . '/images/pinterest-icon_header.svg'); ?>

										<?php echo $facebookConents; ?>

									</a>

									<a class="header_social__icon" href="https://www.instagram.com/babyledfeeding/" target="_blank">

										<?php $facebookConents = file_get_contents(get_template_directory_uri() . '/images/instagram-icon_header.svg'); ?>

										<?php echo $facebookConents; ?>

									</a>

									<a class="header_social__icon" href="https://www.facebook.com/babyledfeeding" target="_blank">

										<?php $facebookConents = file_get_contents(get_template_directory_uri() . '/images/facebook-icon_header.svg'); ?>

										<?php echo $facebookConents; ?>

									</a>


								</li>
								<li class="header_social__free"><a  href="#freerecipes">Free Recipes</a></li>

            </ul>
						<div style="clear: right;"></div>
          <div class="navbar-collapse collapse" id="navbar-collapse-grid">
            <ul class="nav navbar-nav primary navbar-right">
              <!-- Grid 12 Menu -->
              <li class="dropdown yamm-fw"><a class="dropdown-toggle" href="/recipes">Recipes<b class="caret hidden-xs hidden-sm"><img src="<?php echo get_template_directory_uri(); ?>/images/caret.svg" alt="Dropdown Arrow"></b></a>
                  <div class="menu_overlay">

                  </div>
                <ul class="dropdown-menu hidden-xs hidden-sm">

                  <li class="container">
                    <div class="row">
                      <div class="col-sm-3">

                        <h3 class="hidden-xs hidden-sm">Recipes</h3>

                        <?php wp_nav_menu( array(
                          'theme_location' => 'recipe',
        									'items_wrap' => '<ul id="" class="yamm__mega-menu">%3$s</ul>' ) );
      									?>

                      </div>
                      <div class="col-sm-9 recipe_wrapper hidden-xs hidden-sm">

                        <?php

                          $args = array(
                            'post_type' => 'recipes',
                            'post_status' => 'publish',
                            'posts_per_page' => 3,
                            'orderby' => 'date',
                            'order'   => 'DESC',
                          );
                          $query = new WP_Query( $args );

                         ?>

                         <?php if($query->have_posts()) : ?>

                           <div class="row">

                         <?php while($query->have_posts()) : $query->the_post(); ?>

                           <div class="col-md-4 recipe_wrapper_thumb">
                             <?php echo get_the_post_thumbnail( $post_id, 'custom-size' ); ?>
                             <a href="<?php echo the_permalink(); ?>">
                               <div class="vert-align">
                                 <?php echo the_title() ?>
                               </div>
                             </a>
                           </div>



                           <?php endwhile; ?>

                           </div>

                         <?php else : ?>

                        <?php endif; wp_reset_postdata();  ?>

											</div>
                    </div>
                  </li>
                </ul>
              </li>


              <li><a class="dropdown-toggle" href="/videos">Videos</a></li>


              <li class="dropdown yamm-fw"><a class="dropdown-toggle" href="/baby-led-weaning">Baby Led Weaning<b class="caret hidden-xs hidden-sm"><img src="<?php echo get_template_directory_uri(); ?>/images/caret.svg" alt="Dropdown Arrow"></b></a>
                <div class="menu_overlay">

                </div>
                <ul class="dropdown-menu hidden-xs hidden-sm">
                  <li class="container">
                    <div class="row">
											<div class="col-sm-3">

                        <h3 class="hidden-xs hidden-sm">Weaning</h3>

                        <?php wp_nav_menu( array(
                          'theme_location' => 'baby-led-feeding',
        									'items_wrap' => '<ul id="" class="yamm__mega-menu">%3$s</ul>' ) );
      									?>

                      </div>
                      <div class="col-sm-9 recipe_wrapper hidden-xs hidden-sm">

                        <?php

                          $args = array(
                            'post_type' => 'weaning',
                            'post_status' => 'publish',
                            'posts_per_page' => 3,
                            'orderby' => 'date',
                            'order'   => 'DESC',
                          );
                          $query = new WP_Query( $args );

                         ?>

                         <?php if($query->have_posts()) : ?>

                           <div class="row">

                         <?php while($query->have_posts()) : $query->the_post(); ?>

                           <div class="col-md-4 recipe_wrapper_thumb">
                             <?php echo get_the_post_thumbnail( $post_id, 'custom-size' ); ?>
                             <a href="<?php echo the_permalink(); ?>">
                               <div class="vert-align">
                                 <?php echo the_title() ?>
                               </div>
                             </a>
                           </div>



                           <?php endwhile; ?>

                           </div>

                         <?php else : ?>

                        <?php endif; wp_reset_postdata();  ?>

											</div>
                    </div>
                  </li>
                </ul>
              </li>

							<li><a class="dropdown-toggle" href="/my-weekly-meal-plan">FREE Meal Planner</a></li>
							<li><a class="dropdown-toggle" href="/about">About</a></li>
							<li><a class="dropdown-toggle" href="/work-with-me">Work with Me</a></li>
              <li>
                <a class="dropdown-toggle search hidden-xs hidden-sm" onclick="openSearch()">
									<img src="<?php echo get_template_directory_uri() ?>/images/search.svg" alt="Search Baby Led Feeding">
                </a>
              </li>

            </ul>
          </div>
        </div>

        <!-- Search overlay -->
        	<div id="mySearch" class="overlay">

        		<!-- Button to close the overlay navigation -->
        		<a href="javascript:void(0)" class="closebtn" onclick="closeSearch()" >&times;</a>

        		<!-- Overlay content -->
        		<div class="container overlay-content">
        			<h2>What are you looking for?</h2>
        				<form method="get" id="searchform" class="searchform" action="/" role="search">

        					<div class="row">
        						<div class="col-md-12">
        							<input class="search-input-box" type="text" name="s" value="" placeholder="Search" maxlength="50" required="required" />
                      <button type="submit"><img src="<?php echo get_template_directory_uri() ?>/images/search_submit.svg" alt="Search Baby Led Feeding"></button>
        						</div>
        						<div class="col-md-2">

        						</div>
        					</div>

        				</form>

        		</div>

        	</div>



	</header><!-- #masthead -->

	<div id="content" class="site-content">

    <div class="social-bar">
      <ul class="nav navbar-nav navbar-right header_social hidden-sm hidden-xs">


          <li class="header_social__wrapper gary">

            <a class="header_social__icon" href="https://www.youtube.com/channel/UCyp_TJ38ejW-_pMWGOheF0Q/" target="_blank">

              <?php $facebookConents = file_get_contents(get_template_directory_uri() . '/images/youtube-icon_header.svg'); ?>

              <?php echo $facebookConents; ?>

            </a>

            <a class="header_social__icon" href="https://www.instagram.com/babyledfeeding/" target="_blank">

              <?php $facebookConents = file_get_contents(get_template_directory_uri() . '/images/instagram-icon_header.svg'); ?>

              <?php echo $facebookConents; ?>

            </a>


            <a class="header_social__icon" href="https://www.pinterest.co.uk/babyledfeeding/" target="_blank">

              <?php $facebookConents = file_get_contents(get_template_directory_uri() . '/images/pinterest-icon_header.svg'); ?>

              <?php echo $facebookConents; ?>

            </a>

            <a class="header_social__icon" href="https://www.facebook.com/babyledfeeding" target="_blank">

              <?php $facebookConents = file_get_contents(get_template_directory_uri() . '/images/facebook-icon_header.svg'); ?>

              <?php echo $facebookConents; ?>

            </a>

            <p style="text-align: center">

              <img src="<?php echo get_template_directory_uri(); ?>/images/letsbefriends.svg" alt="Lets Be Best Friends"></p>



          </li>

      </ul>
    </div>
