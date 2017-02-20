<?php
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div class="page-container">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="coaching-header">
		<h1 class="meet-the-coaches">Meet Your Coaches</h1>
		<p class="about-the-coaches">
			<?php if ( ! empty( the_content() ) ) {
				the_content();
			}
			?>
		</p>
	</div>
<?php endwhile; endif; ?>

<div class="page-seperator"></div>

<div class="coaching-main-column">
	<?php if ( have_rows( 'coaches' ) ) : while ( have_rows( 'coaches' ) ) : the_row(); ?>
	<div class="coach">
		<div class="coach-image-mask"><img src="<?php the_sub_field( 'coach_image' ); ?>" alt="<?php the_sub_field( 'coach_name' ); ?>"></div>
		<span class="coaches-bio">
			<h5 class="coach-name"><?php the_sub_field( 'coach_name' ); ?></h5>
			<span ><?php the_sub_field( 'coach_bio' ); ?></span>
		</span>
	</div>
	<?php endwhile; endif; ?>
	<?php
		if( is_active_sidebar( 'two-column-main-widgets') ) :
			dynamic_sidebar( 'two-column-main-widgets');
		else :
			the_field( 'main_column_content' );
		endif;
	?>
</div>

<div class="sidebar">
	<?php dynamic_sidebar( 'coaches-sidebar-widgets' ); ?>
</div>

</div>

<?php get_footer();
