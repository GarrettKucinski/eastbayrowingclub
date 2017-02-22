<?php if ( have_rows( 'sponsors' ) ) : ?>
    <h4 class="sponsor-heading">Thanks to our current sponsors!</h4>
    <?php while ( have_rows( 'sponsors' ) ) : the_row(); ?>
        <img class="sponsor-logo" src="<?php the_sub_field( 'sponsor_logo' ); ?>" alt="sponsor logo">
    <?php endwhile; ?>
<?php endif; ?>
