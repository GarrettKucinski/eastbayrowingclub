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
</div>

<div class="sidebar">
	<?php dynamic_sidebar( 'coaches-sidebar-widgets' ); ?>
</div>

<hr>

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
