<?php
/**
 * Template part for displaying services
 *
 * @subpackage Aitoa
 * @since 1.0
 */

?>

<?php

/* Start the Loop */
while ( have_posts() ) :
	the_post();

	?>

	<div class="top_info">
		<span class="active"><?php _e( 'Soita <br />ja varaa <br />aika', 'aitoa' ); ?></span>
		<a href="tel:(03) 874 180" title="">(03) 874 180</a>
	</div>

	<div id="service_main" class="post_main">

		<div class="service_inner post_inner">

			<h2 class="service_title post_title"><?php the_title(); ?></h2>

			<div class="service_content post_content">
				<?php the_content(); ?>
			</div>

		</div>
		
	</div>

<?php
endwhile; // End of the loop.

?>