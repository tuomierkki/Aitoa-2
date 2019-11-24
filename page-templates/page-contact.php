<?php
/*
Template Name: Contact Page
*/

get_header();
?>

<?php get_sidebar(); ?>

<!-- #main_content start -->
<div id="main_content" data-simplebar>
	
	<!-- .main_content_inner start -->
	<div class="main_content_inner">

		<div class="top_info">
			<span class="active"><?php _e( 'Soita <br />ja varaa <br />aika', 'aitoa' ); ?></span>
			<a href="tel:(03) 874 180" title="">(03) 874 180</a>
		</div>

		<div id="page_content" class="page_contact">

			<div class="page_content_inner">
			
				<?php

				/* Start the Loop */
				while ( have_posts() ) :
					the_post();
				?>
					<h2 class='page_title'><?php the_title(); ?></h2>
					<div class='page_main'>
						<div class="contact_main">
							<?php the_content(); ?>
						</div>						
					</div>
				<?php
				endwhile; // End of the loop.
				?>

				<div class="service_phone">
					<a href="tel:(03) 874 180" title="">(03) 874 180</a>
				</div>

				<div class="contact_img">
					<a href="https://www.google.fi/maps/place/V%C3%A4%C3%A4ksyn+L%C3%A4%C3%A4k%C3%A4rikeskus/@61.1803213,25.5240549,17z/data=!3m1!4b1!4m5!3m4!1s0x468fcd4703c5c6d9:0xc206b847e33fa871!8m2!3d61.1803187!4d25.5262489" target="_blank" title=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/contact_img.png" alt=""></a>
				</div>

			</div>

		</div>

	<?php get_footer();