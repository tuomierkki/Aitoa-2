<?php
/*
Template Name: Monessa Page
*/

get_header();
?>

<?php get_sidebar(); ?>

<!-- #main_content start -->
<div id="main_content" data-simplebar>
	
	<!-- .main_content_inner start -->
	<div class="main_content_inner">

		<div id="monessa_main">

			<?php

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
			?>
				<h2 class='page_title'><?php the_title(); ?></h2>
			<?php
			endwhile; // End of the loop.
			?>

			<div id="monessa_blocks">

				<?php
				  	$pages = get_pages( array( 
				  		'child_of' => $post->ID, 
				  		'sort_column' => 'ID', 
				  	) );
				?>

				<div class="monessa_block_head">
				<?php
					$i = 0;
				  	foreach($pages as $child) {				  		
				?>
					<div class="monessa_head_wrapper">
						<div class="monessa_head_each <?php echo ( $i == 0 ) ? 'active' : '';?>">
							<div class="monessa_head_each_inner" status="<?php echo $i; ?>">
								<img src="<?php echo get_the_post_thumbnail_url($child->ID); ?>" alt="">
								<span class="monessa_each_title"><?php echo get_the_title($child->ID); ?></span>
							</div>
						</div>
						<div class="monessa_content_each mob_monessa" status="<?php echo $i; ?>">

							<div class="monessa_content_each_inner">								
								<div class="monessa_content_right">
								<?php 
									$post_var = get_post($child->ID); 
									$content = $post_var->post_content;
									$content = apply_filters('the_content', $content);
									echo $content;
								?>
								</div>
								<div class="monessa_content_left">
									<h6><?php _e( 'LINKIT:', 'aitoa' ); ?></h6>
									<?php echo get_post_meta($child->ID, 'linkit:', true); ?>
								</div>
							</div>

						</div>
					</div>
				<?php $i++; } ?>
				</div>

				<div class="monessa_block_content mob_pc">
				<?php
					$j = 0;
				  	foreach($pages as $child) {					  		
				?>
					<div class="monessa_content_each" status="<?php echo $j; ?>">

						<div class="monessa_content_each_inner">
							<div class="monessa_content_left">
								<h6><?php _e( 'LINKIT:', 'aitoa' ); ?></h6>
								<?php echo get_post_meta($child->ID, 'linkit:', true); ?>
							</div>
							<div class="monessa_content_right">
							<?php 
								$post_var = get_post($child->ID); 
								$content = $post_var->post_content;
								$content = apply_filters('the_content', $content);
								echo $content;
							?>
							</div>
						</div>

					</div>
				<?php $j++; } ?>
				</div>

			</div>

			<div id="facebook_feed" class="monessa_feed">
				<?php juicer_feed("name=110334160372967-2dd89c04-dd98-4aaf-83fc-e384cbb2b9e5"); ?>
			</div>

		</div>

	<?php get_footer();