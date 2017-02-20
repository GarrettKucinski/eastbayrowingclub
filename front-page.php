<?php
get_header(); ?>

<header>
  <div class="hero-img-container">
    <?php get_template_part( 'template-parts/featured-image' ); ?>
    <div class="hero-cta">
      <h1 class="hero-cta-title">Competitive and recreational rowing on the Oakland Estuary!</h1>
      <div class="cta-buttons button-group">
        <a href="/learn-to-row" class="join-us button hollow">Join Us</a>
        <a href="/about" class="who-we-are button hollow">Who We Are</a>
      </div>
    </div>
  </div>
</header>

<section class="who_we_are">
  <div class="details-excerpt">
    <h2 class="details-excerpt--heading">who we are</h2>
    <span class="details-excerpt--body">
      <?php the_field( 'who_we_are' ); ?>
    </span>
  </div>
</section>

<section class="get-involved">
  <div class="inner-container">
  <?php while( have_rows( 'homepage_callout' ) ) : the_row(); ?>
    <div class="get-involved--blurb">
      <h3 class="get-involved--heading"><?php the_sub_field( 'callout_heading' ); ?></h3>
      <p class="get-involved--text"><?php the_sub_field( 'callout_body' ); ?></p>
      <a href="<?php the_sub_field( 'callout_url' ); ?>" class="get-involved--link"><?php the_sub_field( 'callout_url_text' ); ?></a>
    </div>
  <?php endwhile; ?>
</div>
</section>

<section class="learn-to-row">
  <div class="callout-container">
    <h3 class="learn-to-row--heading">
      <?php the_field( 'cta_heading' ); ?>
    </h3>
    <p class="learn-to-row--text">
      <?php the_field( 'cta_excerpt') ?>
    </p>
    <a href="<?php the_field( 'cta_button_link' ); ?>" class="learn-to-row--button">
      <?php the_field( 'cta_button_text' ); ?>
    </a>
  </div>
</section>

<section class="social-media">
    <article class="from-the-blog">
      <h4 class="from-the-blog--title">From The Blog</h4>
        <?php
          $args = array(
            'post_type'=>'post',
            'posts_per_page'=>2,
          );

          $recent_blog_posts = new WP_Query( $args );

          if( $recent_blog_posts->have_posts() ) :
          while( $recent_blog_posts->have_posts() ) :
          $recent_blog_posts->the_post();
        ?>
        <div class="recent-post-container">
          <div class="post_image" style="background-image: url( '<?php the_post_thumbnail_url(); ?>' );"></div>
          <h4 class="post_title"><?php the_title(); ?></h4>
          <p class="post_excerpt"><?php the_content(); ?></p>
        </div>
      <?php wp_reset_postdata(); ?>
      <?php endwhile; endif; ?>
    </article>
    <article class="twitter-feed">
        <?php dynamic_sidebar( 'homepage-widgets' ); ?>
    </article>
</section>

<section class="homepage-gallery">
  <?php while( have_rows( 'carousel' ) ) : the_row(); ?>
    <div class="image-container" style="background-image: url('<?php the_sub_field( 'carousel_image' ); ?>'); background-repeat: no-repeat; background-size: cover; min-height: 300px;">
      <div class="image-details">
        <h3><?php the_sub_field( 'carousel_image_title' ); ?></h3>
        <p><?php the_sub_field( 'carousel_image_description' ); ?></p>
        <a class="gallery-button" href="<?php the_permalink(); ?>">
          <?php the_sub_field( 'carousel_button_text' ); ?>
        </a>
      </div>
    </div>
  <?php endwhile; ?>
</section>

<?php get_footer();
