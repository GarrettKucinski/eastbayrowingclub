<?php
/*
Template Name: Two Column
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>
<?php if ( ! has_post_thumbnail( $post->ID ) ) : ?>
    <div class="no-featured-image page-seperator"></div>
<?php endif; ?>

<div id="page-two-column" role="main">
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

<?php while ( have_posts() ) : the_post(); ?>
        <article <?php post_class( 'main-content' ) ?> id="post-<?php the_ID(); ?>">
        	<div class="column-left">
        		<div class="left-column-content">
                	<?php
                		if( is_active_sidebar( 'two-column-main-widgets') ) :
                			dynamic_sidebar( 'two-column-main-widgets');
                		else :
                			the_field( 'main_column_content' );
                		endif;
                	?>
                    <?php if ( is_page( 'sponsorship' ) ) : ?>
                        <?php get_template_part( 'template-parts/sponsor_logos' ); ?>
                    <?php endif; ?>
        		</div>
        	</div>
        	<div class="column-right">
                <?php
                    if( is_active_sidebar( 'two-column-sidebar' ) ) :
                        if ( ! is_page( array( 'competitive-masters', 'club-masters', 'novice-masters', 'contact-us' ) ) ) :
                            dynamic_sidebar( 'two-column-sidebar' );
                        endif;
                    elseif ( is_page( 'coaching-staff' ) ) :
                        dynamic_sidebar( 'coaches-sidebar-widgets' );
                    else:
                		the_field( 'right_column_content' );
                    endif;
                ?>

        	</div>
        </article>
            <?php if (is_page( 'coaching-staff' ) ) : ?>
                <?php get_template_part( 'template-parts/board-of-directors-info'); ?>
            <?php endif; ?>
            
            <?php if ( is_page( 'sponsorship' ) ) : ?>
                <?php get_template_part( 'template-parts/sponsorship-levels' ); ?>
            <?php endif; ?>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>

</div>

<?php get_footer();
