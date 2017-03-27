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
					<div class="footer-events footer-content">&copy; East Bay Rowing Club. </div>
					<?php dynamic_sidebar( 'footer-widgets' ); ?>
					<img class="footer-map" src="<?php echo esc_html( get_template_directory_uri() ); ?>/assets/images/eastbay/aquatic_center_location.png" alt="Jack London Aquatic Center location on a google map">
					<div class="footer-links footer-content">
						<?php while ( have_rows( 'footer_links', 'footer_settings' ) ) : the_row(); ?>
							<a class="footer-link" href="<?php the_sub_field( 'link' ); ?>"><?php the_sub_field( 'link_text' ); ?></a>
						<?php endwhile; ?>
					</div>
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
