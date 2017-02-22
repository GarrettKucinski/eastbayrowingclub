<?php
/*
Template Name: Full Width
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<?php if ( ! has_post_thumbnail( $post->ID ) ) : ?>
    <div class="no-featured-image page-seperator"></div>
<?php endif; ?>

<div id="page-full-width" role="main">
<?php do_action( 'foundationpress_before_content' ); ?>
<div class="coaching-header">
	<h1 class="meet-the-coaches">
        <?php the_field( 'page_title' ); ?>
    </h1>
	<p class="about-the-coaches">
		<?php the_field( 'page_callout' ); ?>
	</p>
</div>
<div class="page-seperator"></div>

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
  <article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
      <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
      <div class="entry-content">
          <?php the_content(); ?>
      </div>
  </article>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>

</div>

<?php get_footer();
