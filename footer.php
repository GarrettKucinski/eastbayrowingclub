<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */


?>


		</section>  
		<div id="footer-container" <?php if ( ! is_front_page() ) { echo 'class="not-front-page"'; } ?>>
			<footer id="footer">
				<?php do_action( 'foundationpress_before_footer' ); ?>
					<?php dynamic_sidebar( 'footer-widgets' ); ?>
					<div class="footer-map">					<a href="https://www.google.com/maps/place/Jack+London+Aquatic+Center/@37.790563,-122.2681683,17z/data=!3m1!4b1!4m5!3m4!1s0x808f80cd57d96447:0xd11feea412247278!8m2!3d37.790563!4d-122.2659796"><img src="<?php echo esc_html( get_template_directory_uri() ); ?>/assets/images/eastbay/aquatic_center_location.png" alt="Jack London Aquatic Center location on a google map"></a>
					</div>
					<div class="footer-links footer-content">
						<?php while ( have_rows( 'footer_links', 'footer_settings' ) ) : the_row(); ?>
							<a class="footer-link" href="<?php the_sub_field( 'link' ); ?>"><?php the_sub_field( 'link_text' ); ?></a>
						<?php endwhile; ?>
					</div>
					<div class="footer-events footer-content footer-copyright">&copy; East Bay Rowing Club. </div>
				<?php do_action( 'foundationpress_after_footer' ); ?>
			</footer>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
