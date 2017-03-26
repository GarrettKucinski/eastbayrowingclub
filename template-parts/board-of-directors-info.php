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
