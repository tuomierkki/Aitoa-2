<?php
/*
Template Name: Common Page
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

		<div id="page_content">

			<div class="page_content_inner">
			
				<?php

				/* Start the Loop */
				while ( have_posts() ) :
					the_post();
				?>
					<h2 class='page_title'><?php the_title(); ?></h2>
					<div class='page_main'>
						<?php the_content(); ?>							
					</div>
				<?php
				endwhile; // End of the loop.
				?>

				<div class="service_phone">
					<a href="tel:(03) 874 180" title="">(03) 874 180</a>
				</div>

			</div>

		</div>

	<?php get_footer();