<?php
/*
Template Name: Työntekijät Page
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
					<div class='page_sub'>
						<p><?php echo get_post_meta(get_the_ID(), 'description', true); ?></p>
					</div>

					<div id="members_section">
						<?php
						
						$terms = get_terms( array(
						    'taxonomy' => 'department',
						    'orderby' => 'id',
						) );

						foreach ($terms as $key => $value) {

						?>

						<div class="member_area">
							<h3 class="member_title"><?php echo $value->name; ?></h3>
							<div class="member_content">

						<?php

							$args = array(
							    'post_type'=> 'employee',
							    'post_status' => 'publish', 
							    'posts_per_page' => -1,
							    'tax_query' => array(
									  	array( 
										  	'taxonomy' => 'department', 
										  	'field' => 'id', 
										  	'terms' => $value->term_id 
									  	)
									)
							    );              

							$the_query = new WP_Query( $args );
							while ( $the_query->have_posts() ) {
							    $the_query->the_post();
							?>
								<div class="member_each">
									<div class="member_img">
										<?php 
										if ( has_post_thumbnail() ) {
										    the_post_thumbnail();
										} else {
										?>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/noimage.png" alt="">
										<?php
										}
										?>
									</div>
									<div class="member_desc">
										<span class="member_name"><?php the_title(); ?></span>
										<span class="member_role"><?php echo get_post_meta(get_the_ID(), 'role', true); ?></span>
									</div>
								</div>
							<?php
							}

							wp_reset_query();

							?>

							</div>
						</div>

							<?php

						}

						?>
					</div>

					<div class='page_main page_tyon'>
						<?php the_content(); ?>							
					</div>
				<?php
				endwhile; // End of the loop.
				?>

			</div>

		</div>

	<?php get_footer();