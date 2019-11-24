<?php
/**
 * Template part for displaying services
 *
 * @subpackage Aitoa
 * @since 1.0
 */

?>

<?php

if( isset($_POST['service_name']) ){
    $active_service = $_POST['service_name'];
}

/* Start the Loop */
while ( have_posts() ) :
	the_post();

	?>

	<div class="top_info">
		<span class="active"><?php _e( 'Soita <br />ja varaa <br />aika', 'aitoa' ); ?></span>
		<a href="tel:(03) 874 180" title="">(03) 874 180</a>
	</div>

	<div id="service_main">

		<div class="service_inner">

			<h2 class="service_title"><?php the_title(); ?></h2>

			<div class="service_content">
				<?php the_content(); ?>
			</div>

			<?php 
				$menu_order = $post->menu_order;
				$id = get_the_ID();
				$cats = get_the_terms( get_the_ID(), 'group' );
				$cur_cat = $cats[0]->term_taxonomy_id;
				if ( $menu_order == 0 ) {
					if ( $id == 55 || $id == 70 || $id == 49 ) {
					?>
					<div class="service_tabs">
						<?php
						$args = array(
						    'post_type'=> 'service',
						    'post_status' => 'publish', 
						    'posts_per_page' => -1,
						    'menu_order' => 1, 
						    'orderby' => 'date',
    						'order'   => 'ASC',
    						'tax_query' => array(
								  	array( 
									  	'taxonomy' => 'group', 
									  	'field' => 'id', 
									  	'terms' => array( $cur_cat ) 
								  	)
								)
						    );              

						$the_query = new WP_Query( $args );
						while ( $the_query->have_posts() ) {
						    $the_query->the_post();
						?>									
							<div class="service_tab" service_num="<?php echo get_the_ID(); ?>">
								<div class="service_tab_title">
									<p><?php the_title(); ?></p>
								</div>
								<div class="service_tab_content">
									<div class="service_tab_main">
										<?php the_content(); ?>
									</div>
									<?php 
										$sub_add1 = get_post_meta(get_the_ID(), 'additional_title1', true);
										if ( $sub_add1 ) {
										?>
										<div class="additional_content1">
											<h5><?php echo $sub_add1; ?></h5>
											<div class="add_content add_content1">
												<?php echo get_post_meta(get_the_ID(), 'additional_content1', true); ?>
											</div>
										</div>
										<?php
										}
									?>
									<?php 
										$sub_add2 = get_post_meta(get_the_ID(), 'additional_title2', true);
										if ( $sub_add2 ) {
										?>
										<div class="additional_content2">
											<h5><?php echo $sub_add2; ?></h5>
											<div class="add_content add_content2">
												<?php echo get_post_meta(get_the_ID(), 'additional_content2', true); ?>
											</div>
										</div>
										<?php
										}
									?>
								</div>
							</div>
						<?php
						}

						wp_reset_query();
						?>
					</div>
					<?php
					}
				}
			?>

			<?php 
				$add1 = get_post_meta(get_the_ID(), 'additional_title1', true);
				if ( $add1 ) {
				?>
				<div class="additional_content1">
					<h5><?php echo $add1; ?></h5>
					<div class="add_content add_content1">
						<?php echo get_post_meta(get_the_ID(), 'additional_content1', true); ?>
					</div>
				</div>
				<?php
				}
			?>

			<div class="service_phone">
				<a href="tel:(03) 874 180" title="">(03) 874 180</a>
			</div>

			<?php 
				$add2 = get_post_meta(get_the_ID(), 'additional_title2', true);
				if ( $add2 ) {
				?>
				<div class="additional_content2">
					<h5><?php echo $add2; ?></h5>
					<div class="add_content add_content2">
						<?php echo get_post_meta(get_the_ID(), 'additional_content2', true); ?>
					</div>
				</div>
				<?php
				}
			?>

			<input type="hidden" id="submit_service" type="" value="<?php echo $active_service; ?>" name="">

		</div>
		
	</div>

<?php
endwhile; // End of the loop.

?>