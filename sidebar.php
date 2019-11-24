<?php
/**
 * The Sidebar containing the fixed left area
 *
 * @package aitoa
 * @since aitoa 1.0
 */
?>

	<!-- #sidebar start -->
	<div id="sidebar" class="sidebar">

		<div id="sidebar_inner" class="sidebar_inner" data-simplebar>

			<div id="sidebar_content">
			
				<div class="sidebar_main">
					
					<h1 class="sidebar_title">
						<span><?php _e( 'Aitoa', 'aitoa' ); ?></span>
						<span><?php _e( 'kohtaamista', 'aitoa' ); ?></span>
						<span><?php _e( 'ihmiseltä ihmiselle', 'aitoa' ); ?></span>
					</h1>
					
					<div class="service_menu">

						<div class="service_menu_header">
							<span id="menu_switcher" class="<?php if ( is_singular('service') || ( $post->ID == 78 ) || ( $post->ID == 97 ) ) echo 'enable'; ?>" status="<?php if ( is_singular('service') ) { echo 'palve'; } else if ( $post->ID == 78 ) { echo 'hinna'; } else if ( $post->ID == 97 ) { echo 'ajan'; } ?>">
								<strong class="palve <?php if ( is_singular('service') ) echo 'active'; ?>" ref='palve'><?php _e( 'Palvelut', 'aitoa' ); ?></strong>
								<strong cus_url="<?php echo esc_url( home_url( '/' ) ); ?>ajanvaraus/" class="ajan <?php if ( $post->ID == 97 ) echo 'active'; ?>" cur="<?php if ( $post->ID == 97 ) echo 'current'; ?>" ref='ajan'><?php _e( 'Ajanvaraus', 'aitoa' ); ?></strong>
								<strong cus_url="<?php echo esc_url( home_url( '/' ) ); ?>hinnasto/" class="hinna <?php if ( $post->ID == 78 ) echo 'active'; ?>" cur="<?php if ( $post->ID == 78 ) echo 'current'; ?>" ref='hinna'><?php _e( 'Hinnasto', 'aitoa' ); ?></strong>
							</span>
						</div>

						<div class="service_menu_content">

							<div class="service_menu_content_inner">
							
								<div class="service_menu_col">
									<ul class="service_level1">
									<?php
									$args = array(
									    'post_type'=> 'service',
									    'post_status' => 'publish', 
									    'posts_per_page' => -1,
									    'menu_order' => 0, 
									    'orderby' => 'date',
	            						'order'   => 'ASC',
	            						'post__not_in' => array( 55, 70, 49 )
									    );              

									$the_query = new WP_Query( $args );
									while ( $the_query->have_posts() ) {
									    $the_query->the_post();
									?>									
										<li service_id="<?php echo get_the_ID(); ?>">
											<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
										</li>
									<?php
									}

									wp_reset_query();
									?>
									</ul>
								</div>

								<div class="service_menu_col">
									<ul class="service_level2">
										<li class="menu_level1" service_id="55" cat_id="8">
											<a href="<?php echo esc_url( home_url( '/' ) ); ?>service/erikoislaakarit/" title="Erikoislääkärit"><?php _e( 'Erikoislääkärit', 'aitoa' ); ?></a>
										</li>
									<?php
									$args1 = array(
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
												  	'terms' => array( '8' ) 
											  	)
											)
									    );              

									$the_query1 = new WP_Query( $args1 );
									while ( $the_query1->have_posts() ) {
									    $the_query1->the_post();
									?>									
										<li class="menu_level2" service_id="<?php echo get_the_ID(); ?>">
											<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
										</li>
									<?php
									}

									wp_reset_query();
									?>
									</ul>
								</div>

								<div class="service_menu_col">
									<ul class="service_level2 service_level_more">
										<li class="menu_level1" service_id="70" cat_id="9">
											<a href="<?php echo esc_url( home_url( '/' ) ); ?>service/hoitajat/" title="Hoitajat"><?php _e( 'Hoitajat', 'aitoa' ); ?></a>
										</li>
									<?php
									$args2 = array(
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
												  	'terms' => array( '9' ) 
											  	)
											)
									    );              

									$the_query2 = new WP_Query( $args2 );
									while ( $the_query2->have_posts() ) {
									    $the_query2->the_post();
									?>									
										<li class="menu_level2" service_id="<?php echo get_the_ID(); ?>">
											<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
										</li>
									<?php
									}

									wp_reset_query();
									?>
									</ul>
									<ul class="service_level2">
										<li class="menu_level1" service_id="49" cat_id="10">
											<a href="<?php echo esc_url( home_url( '/' ) ); ?>service/terapeutit/" title="Terapeutit"><?php _e( 'Terapeutit', 'aitoa' ); ?></a>
										</li>
									<?php
									$args3 = array(
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
												  	'terms' => array( '10' ) 
											  	)
											)
									    );              

									$the_query3 = new WP_Query( $args3 );
									while ( $the_query3->have_posts() ) {
									    $the_query3->the_post();
									?>									
										<li class="menu_level2" service_id="<?php echo get_the_ID(); ?>">
											<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
										</li>
									<?php
									}

									wp_reset_query();
									?>
									</ul>
								</div>

							</div>

							<form action="" name="service_info" method="POST" id="service_info">
								<input id="service_name" value="<?php if ( is_singular( 'service' ) ) echo get_the_ID(); ?>" type="hidden" name="service_name">
							<?php 
							if ( is_singular( 'service' ) ) {
								$cats = get_the_terms( get_the_ID(), 'group' );
								$menu_order = $post->menu_order;
							?>
								<input id="service_cat" value="<?php echo $cats[0]->term_taxonomy_id; ?>" type="hidden" name="service_cat">
								<input id="service_level" value="<?php echo $menu_order; ?>" type="hidden" name="service_level">
							<?php
							}
							?>
							</form>

						</div>

					</div>

					<div id="mob_services" class="mob_services">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>service/yleislaakari/" class="mob_block" title="Yleislääkäri"><?php _e( 'Yleislääkäri', 'aitoa' ); ?></a>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>service/erikoislaakarit/" class="mob_block" title="Erikoislääkärit"><?php _e( 'Erikoislääkärit', 'aitoa' ); ?></a>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>service/laboratorio/" class="mob_block" title="Laboratorio"><?php _e( 'Laboratorio', 'aitoa' ); ?></a>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>service/tyoterveyshuolto" class="mob_block" title="Työterveyshuolto"><?php _e( 'Työterveys', 'aitoa' ); ?></a>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>service/terapeutit/" class="mob_block" title="Terapeutit"><?php _e( 'Terapeutit', 'aitoa' ); ?></a>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>service/hoitajat/" class="mob_block" title="Hoitajat"><?php _e( 'Hoitajat', 'aitoa' ); ?></a>
					</div>

				</div>

				<div class="sidebar_footer">

					<div class="sidebar_footer_left">
						<p class="sidebar_footer_title"><?php _e( 'Vääksyn LääkÄrikeskus', 'aitoa' ); ?></p>
						<ul class="footer_list1">
							<li class="footer_address">Honkaniementie 7 <br />17200 Vääksy</li>
							<li class="footer_phone"><a href="tel:(03) 874 180" title="">(03) 874 180</a></li>
							<li class="footer_print">(03) 874 1810</li>
							<li class="footer_email"><a href="mailto:info@vaaksynlaakarikeskus.fi" title="">info@vaaksynlaakarikeskus.fi</a></li>
						</ul>
					</div>

					<div class="sidebar_footer_right">
						<p class="sidebar_footer_title"><?php _e( 'Aukioloajat', 'aitoa' ); ?></p>
						<ul class="footer_list2">
							<?php echo do_shortcode( '[opening_hours]' ) ?>
						</ul>
						<a href="tel:(03) 874 180" title="" class="mob_phone"><?php _e( 'Varaa aika', 'aitoa' ); ?></a>
					</div>
					<div class="clear"></div>

				</div>

			</div>

		</div>
		
	</div><!-- #sidebar end -->