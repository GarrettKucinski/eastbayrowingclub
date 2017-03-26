<?php
/*
Template Name: Horizontal Thirds
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div id="page-horizontal-thirds" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
  <article <?php post_class( 'main-content' ) ?> id="post-<?php the_ID(); ?>">
	<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
	<div class="upper-third">
		<span class="left-column accent-image">
			<img src="<?php the_field( 'accent_image' ); ?>" alt="page accent image">
		</span>
		<span class="right-column intro-text">
			<?php the_field( 'intro_text' ); ?>
		</span>
	</div>
	<div class="middle-third">
		<span class="left-column">
			<?php the_field( 'middle_third_left_content' ); ?>
		</span>
		<span class="right-column">
			<?php the_field( 'middle_third_right_content' ); ?>
		</span>
	</div>
	<div class="lower-third">
		<span class="left-column">
			<?php the_field( 'lower_third_left_content' ); ?>
		</span>
		<span class="right-column">
			<?php the_field( 'lower_third_right_content' ); ?>
		</span>

	</div>
	<footer>
		<?php wp_link_pages( array( 'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
		<p><?php the_tags(); ?></p>
	</footer>
	<?php do_action( 'foundationpress_page_before_comments' ); ?>
	<?php comments_template(); ?>
	<?php do_action( 'foundationpress_page_after_comments' ); ?>
	</article>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>

</div>

<?php get_footer();
