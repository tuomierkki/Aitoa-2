<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>
						<div id="main_footer">
							<div class="footer_left">
								<ul>
									<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>evasteet/" title="Evästeet"><?php _e( 'Evästeet', 'aitoa' ); ?></a></li>
									<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>proof-of-concept/" title="Proof of Concept"><?php _e( 'Proof Of Concept', 'aitoa' ); ?></a></li>
								</ul>
							</div>
							<div class="footer_right">
								<span class="copyright"><?php _e( '© 2019 Vääksyn Lääkärikeskus | Toteutus by Neodesign', 'aitoa' ); ?></span>
							</div>
						</div>

					</div><!-- .main_content_inner end -->

				</div><!-- #main_content end -->

			</div><!-- #content_inner end -->

		</div><!-- #content end -->

	</div><!-- #wrapper -->

</div><!-- #page -->

<?php wp_footer(); ?>
<script type='text/javascript' src='<?php echo get_stylesheet_directory_uri(); ?>/js/simplebar.min.js'></script>
<script type='text/javascript' src='<?php echo get_stylesheet_directory_uri(); ?>/js/custom.js'></script>

</body>
</html>
