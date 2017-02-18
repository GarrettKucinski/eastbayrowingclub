<?php
/*
Template Name: Two Column
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div id="page-two-column" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
  <article <?php post_class( 'main-content' ) ?> id="post-<?php the_ID(); ?>">
	  <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
	  <div class="column-left entry-content">
	  <header>
		  <h3 class="entry-title"><?php the_title(); ?></h3>
	  </header>
		  <div class="left-column-content">
			  <?php the_content(); ?>
		  </div>
	  </div>
	  <div class="column-right">
		  <?php echo get_field( 'right_column_content' ); ?>
	  </div>
	  <footer>
		  <?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
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
