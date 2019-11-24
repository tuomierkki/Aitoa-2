<?php
/*
Template Name: Rekrytointi Page
*/

get_header();
?>

<?php get_sidebar(); ?>

<!-- #main_content start -->
<div id="main_content" data-simplebar>
	
	<!-- .main_content_inner start -->
	<div class="main_content_inner">

		<div id="page_content" class="page_rekry">

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

			</div>

		</div>

	<?php get_footer();