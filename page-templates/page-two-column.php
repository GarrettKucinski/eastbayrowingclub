<?php
/*
Template Name: Two Column
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>
<?php if ( ! has_post_thumbnail( $post->ID ) ) : ?>
    <div class="page-seperator"></div>
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
    <?php if ( is_page( 'coaching-staff' ) ) : ?>
        <div class="coaching-main-column">
        	<?php if ( have_rows( 'coaches' ) ) : while ( have_rows( 'coaches' ) ) : the_row(); ?>
        	<div class="coach">
        		<div class="coach-image-mask" style="background-image: url('<?php the_sub_field( 'coach_image' ); ?>');"></div>
        		<span class="coaches-bio">
        			<h5 class="coach-name"><?php the_sub_field( 'coach_name' ); ?></h5>
        			<span ><?php the_sub_field( 'coach_bio' ); ?></span>
        		</span>
        	</div>
        	<?php endwhile; endif; ?>
            <div class="board-of-directors">
                <h4 class="directors-heading">Board of Directors</h4>
                <?php while (have_rows( 'board_of_directors' ) ) : the_row(); ?>
                        <div class="director">
                            <p class="director--name">
                                <?php the_sub_field( 'director_name' ); ?>
                                <span class="director--title"> <?php the_sub_field( 'director_title' ); ?>
                                </span>
                            </p>
                        </div>
                <?php endwhile; ?>
            </div>
        </div>

        <div class="sidebar">
        	<?php dynamic_sidebar( 'coaches-sidebar-widgets' ); ?>
        </div>

    <?php else : ?>
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
                        <?php if ( have_rows( 'sponsors' ) ) : ?>
                            <h4 class="sponsor-heading">Thanks to our current sponsors!</h4>
                            <?php while ( have_rows( 'sponsors' ) ) : the_row(); ?>
                                <img class="sponsor-logo" src="<?php the_sub_field( 'sponsor_logo' ); ?>" alt="sponsor logo">
                            <?php endwhile; ?>
                        <?php endif; ?>
                    <?php endif; ?>
        		</div>
        	</div>
        	<div class="column-right">
        		<?php the_field( 'right_column_content' ); ?>
        	</div>
        </article>
            <?php if ( is_page( 'sponsorship' ) ) : ?>
                <?php if ( have_rows( 'sponsorship_levels' ) ) : ?>
                    <div class="page-seperator"></div>
                    <h3 class="sponsorship-level--heading">
                        Sponsorship Tiers
                    </h3>
                    <?php while ( have_rows( 'sponsorship_levels' ) ) : the_row(); ?>
                        <div class="sponsorship-level">
                            <img class="sponsorship-level--image" src="<?php the_sub_field( 'sponsorship_image' ); ?>" alt="sponsorship image">
                            <h4 class="sponsorship-level--name">
                                <?php the_sub_field( 'sponsorship_level_name' ); ?>
                                <span class="sponsorship-level--amounts">
                                    <?php the_sub_field( 'sponsorship_level_amounts' ); ?>
                                </span>
                            </h4>
                            <span class="sponsorship-level--list">
                                <?php the_sub_field( 'sponsorship_list' ); ?>
                            </span>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            <?php endif; ?>
    <?php endif; ?>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>

</div>

<?php get_footer();
