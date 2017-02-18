<?php
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div class="page-container">

<div class="coaching-header">
  <h1 class="meet-the-coaches">Meet Your Coaches</h1>
  <p class="about-the-coaches">We are fortunate at EBRC to have a large and diverse coaching staff. Some of our coaches have competed at the highest levels
  and on their national teams. Others have led or been part of growing rowing programs from scratch throughout the country</p>
</div>

<div class="page-seperator"></div>

<div class="coaching-main-column">

  <?php if( have_rows( 'coaches' ) ) : while( have_rows( 'coaches' ) ) : the_row(); ?>
	<div class="coach">
		<div class="coach-image-mask"><img src="<?php the_sub_field( 'coach_image' ); ?>" alt="<?php the_sub_field( 'coach_name' ); ?>"></div>
		<span class="coaches-bio">
		  <h5 class="coach-name"><?php the_sub_field( 'coach_name' ); ?></h5>
		  <span ><?php the_sub_field( 'coach_bio' ); ?></span>
		</span>
	</div>
  <?php endwhile; endif; ?>

</div>

<div class="sidebar">
	<?php
		$args = array(
			'posts_per_page' => 2,
            'post_type' => 'post',
		);
        $sidebar_blog_posts = new WP_Query($args);
	?>
    <?php
        if( $sidebar_blog_posts->have_posts() ) :
        while( $sidebar_blog_posts->have_posts() ) :
        $sidebar_blog_posts->the_post();
    ?>
    <span class="sidebar-blog-posts">
        <span class="sidebar-blog-posts--image" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');"></span>
        <a class="sidebar-blog-posts--title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </span>
    <?php wp_reset_postdata();
          endwhile; endif; ?>

  <?php dynamic_sidebar( 'coaches-sidebar-widgets'); ?>
</div>

</div>

<?php get_footer();
