<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Aitoa
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
	<link rel='stylesheet' href='<?php echo get_stylesheet_directory_uri(); ?>/css/custom.css' type='text/css' media='all' />
	<script type="text/javascript">
	  	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  	ga('create', 'UA-84647754-1', 'auto');
	  	ga('send', 'pageview');
	</script>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!-- #page start -->
<div id="page" class="site">

	<!-- #wrapper start -->
	<div id="wrapper" class="wrapper">

		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'aitoa' ); ?></a>

		<!-- #masthead start -->
		<header id="masthead" class="site-header">

			<div class="header_main">

				<div class="header_left">
					<?php if ( has_custom_logo() ) : ?>
						<div class="header_logo"><?php the_custom_logo(); ?></div>
					<?php else : ?>
					<?php $blog_info = get_bloginfo( 'name' ); ?>
						<h1 class="site_title">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
						</h1>
					<?php endif; ?>
				</div>

				<div class="header_center">
					<?php if ( has_nav_menu( 'menu-1' ) ) : ?>
						<nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'twentynineteen' ); ?>">
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_class'     => 'main-menu',
									'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								)
							);
							?>
						</nav><!-- #site-navigation -->
					<?php endif; ?>
				</div>

				<div class="header_right">
					<?php if ( has_nav_menu( 'social' ) ) : ?>
						<nav class="social-navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'aitoa' ); ?>">
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'social',
									'menu_class'     => 'social-links-menu',
									'link_before'    => '<span class="screen-reader-text">',
									'link_after'     => '</span>' . twentynineteen_get_icon_svg( 'link' ),
									'depth'          => 1,
								)
							);
							?>
						</nav><!-- .social-navigation -->
					<?php endif; ?>
					<a class="home_icon" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/home_icon.png" alt=""></a>
				</div>

				<!--<div class="clear"></div>-->

			</div>

		</header>
		<!-- #masthead end -->

		<!-- #content start -->
		<div id="content" class="site-content">

			<!-- #content_inner start -->
			<div id="content_inner">