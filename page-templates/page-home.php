<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

<?php get_sidebar(); ?>

<!-- #main_content start -->
<div id="main_content" data-simplebar>
	
	<!-- .main_content_inner start -->
	<div class="main_content_inner">
		
		<div id="main_blocks">
			
			<div class="home_block block_yri block_left">

				<div class="home_block_inner">

					<a href="<?php echo esc_url( home_url( '/' ) ); ?>Yritys/" class="home_block_content" title="Yritys">
						<div class="block_text">
							<p><?php _e( 'Yritys', 'aitoa' ); ?></p>
						</div>
					</a>

				</div>

			</div>

			<div class="home_block block_mone block_left">

				<div class="home_block_inner">

					<a href="<?php echo esc_url( home_url( '/' ) ); ?>monessa-mukana/" class="home_block_content" title="Monessa mukana">
						<div class="block_text">
							<p><?php _e( 'Monessa mukana', 'aitoa' ); ?></p>
						</div>
					</a>

				</div>

			</div>

			<div class="home_block block_service">

				<div class="home_block_inner">

					<a href="<?php echo esc_url( home_url( '/' ) ); ?>service/yleislaakari/" class="home_block_content" title="Yleislääkäri">
						<div class="block_img">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/home_icon5.png" alt="">
						</div>
						<div class="block_text">
							<p><?php _e( 'Yleislääkäri', 'aitoa' ); ?></p>
						</div>
					</a>

				</div>

			</div>

			<div class="home_block block_service">

				<div class="home_block_inner">

					<a href="<?php echo esc_url( home_url( '/' ) ); ?>service/erikoislaakarit/" class="home_block_content" title="Erikoislääkärit">
						<div class="block_img">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/home_icon6.png" alt="">
						</div>
						<div class="block_text">
							<p><?php _e( 'Erikoislääkärit', 'aitoa' ); ?></p>
						</div>
					</a>

				</div>

			</div>

			<div class="home_block block_service">

				<div class="home_block_inner">

					<a href="<?php echo esc_url( home_url( '/' ) ); ?>service/terapeutit/" class="home_block_content" title="Terapeutit">
						<div class="block_img">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/home_icon7.png" alt="">
						</div>
						<div class="block_text">
							<p><?php _e( 'Terapeutit', 'aitoa' ); ?></p>
						</div>
					</a>

				</div>

			</div>

			<div class="home_block block_service block_str1">

				<div class="home_block_inner">

					<a href="<?php echo esc_url( home_url( '/' ) ); ?>service/hoitajat/" class="home_block_content" title="Hoitajat">
						<div class="block_img">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/home_icon8.png" alt="">
						</div>
						<div class="block_text">
							<p><?php _e( 'Hoitajat', 'aitoa' ); ?></p>
						</div>
					</a>

				</div>

			</div>

			<div class="home_block block_service block_str1">

				<div class="home_block_inner">

					<a href="<?php echo esc_url( home_url( '/' ) ); ?>service/kirurgia/" class="home_block_content" title="Kirurgia">
						<div class="block_img">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/home_icon9.png" alt="">
						</div>
						<div class="block_text">
							<p><?php _e( 'Kirurgia', 'aitoa' ); ?></p>
						</div>
					</a>

				</div>

			</div>

			<div class="home_block block_koulou block_left">

				<div class="home_block_inner">

					<a href="<?php echo esc_url( home_url( '/' ) ); ?>service/koulutuspalvelut/" class="home_block_content" title="Koulutukset">
						<div class="block_text">
							<p><?php _e( 'Koulutukset', 'aitoa' ); ?></p>
						</div>
					</a>

				</div>

			</div>

			<div class="home_block block_service block_str2">

				<div class="home_block_inner">

					<a href="<?php echo esc_url( home_url( '/' ) ); ?>service/laboratorio/" class="home_block_content" title="Laboratorio">
						<div class="block_img">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/home_icon10.png" alt="">
						</div>
						<div class="block_text">
							<p><?php _e( 'Laboratorio', 'aitoa' ); ?></p>
						</div>
					</a>

				</div>

			</div>

			<div class="home_block block_service block_str3">

				<div class="home_block_inner">

					<a href="<?php echo esc_url( home_url( '/' ) ); ?>service/tyoterveyshuolto" class="home_block_content" title="Työterveyshuolto">
						<div class="block_img">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/home_icon11.png" alt="">
						</div>
						<div class="block_text">
							<p><?php _e( 'Työterveys', 'aitoa' ); ?></p>
						</div>
					</a>

				</div>

			</div>

			<div class="home_block block_intro">

				<div class="home_block_inner">

					<a class="home_block_content">
						<div class="block_img">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/phone_icon.png" alt="">
						</div>
						<div class="block_title">
							<h3>(03) 874 180</h3>
						</div>
						<div class="block_text">
							<p><?php _e( 'Ajanvaraus', 'aitoa' ); ?></p>
						</div>
					</a>

				</div>

			</div>

			<div class="home_block block_service block_news">

				<div class="home_block_inner">

					<?php
					$args = array(
					    'post_type'=> 'post',
					    'post_status' => 'publish', 
					    'posts_per_page' => 1,
					    );              

					$the_query = new WP_Query( $args );
					while ( $the_query->have_posts() ) {
					    $the_query->the_post();
					?>
					<a href="<?php the_permalink(); ?>" class="home_block_content" title="Ajankohtaista">
						<div class="block_top">														
							<p><?php the_title(); ?></p>						
						</div>
						<div class="block_text">
							<p><?php _e( 'Ajankohtaista', 'aitoa' ); ?></p>
						</div>
					</a>
					<?php
					}

					wp_reset_query();

					?>

				</div>

			</div>

			<div class="home_block block_intro mobile_block ">

				<div class="home_block_inner">

					<div class="block_img">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/timer.png" alt="">
					</div>
					<div class="block_text">
						<p><?php _e( 'Ajanvaraus:', 'aitoa' ); ?></p>
						<h3><a href="tel:(03) 874 180" title="">(03) 874 180</a></h3>
					</div>

				</div>

			</div>

			<div class="home_block block_mone mobile_block">

				<div class="home_block_inner">

					<div class="block_back">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/mob_block1.png" alt="">
					</div>

					<a href="<?php echo esc_url( home_url( '/' ) ); ?>monessa-mukana/" class="mob_block_content" title="Monessa mukana">
						<?php _e( 'Monessa mukana', 'aitoa' ); ?>
					</a>

				</div>

			</div>

			<div class="home_block block_contact mobile_block">

				<div class="home_block_inner">

					<div class="block_back">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/mob_block2.png" alt="">
					</div>

					<a href="<?php echo esc_url( home_url( '/' ) ); ?>yhteystiedot/" class="mob_block_content" title="Yhteystiedot">
						<?php _e( 'Yhteystiedot', 'aitoa' ); ?>
					</a>

				</div>

			</div>

			<div class="home_block block_yrit mobile_block">

				<div class="home_block_inner">

					<div class="block_back">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/mob_block3.png" alt="">
					</div>

					<a href="<?php echo esc_url( home_url( '/' ) ); ?>yritys/" class="mob_block_content" title="Yritys">
						<?php _e( 'Yritys', 'aitoa' ); ?>
					</a>

				</div>

			</div>

		</div>

		<div class="home_content">
			
			<?php

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				the_content();

			endwhile; // End of the loop.
			?>

		</div>

		<div id="facebook_feed">
			<?php juicer_feed("name=110334160372967-db62b953-defd-4b43-a6f2-d80699a207f4"); ?>
		</div>

		<div class="mob_footer">
			<p class="sidebar_footer_title"><?php _e( 'Vääksyn LääkÄrikeskus', 'aitoa' ); ?></p>
			<ul class="footer_list1">
				<li class="footer_address">Honkaniementie 7 <br />17200 Vääksy</li>
				<li class="footer_phone"><a href="tel:(03) 874 180" title="">(03) 874 180</a></li>
				<li class="footer_print">(03) 874 1810</li>
				<li class="footer_email"><a href="mailto:info@vaaksynlaakarikeskus.fi" title="">info@vaaksynlaakarikeskus.fi</a></li>
			</ul>
		</div>

		<div class="sidebar_footer home_tab_footer">

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

	<?php get_footer(); ?>