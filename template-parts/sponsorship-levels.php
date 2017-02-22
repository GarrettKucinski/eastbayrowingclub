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
