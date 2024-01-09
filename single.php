<?php get_header(); ?>

<main>
    <?php while (have_posts()):
        the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <div class="container single-post">
                <span class="tag">
                    <?= get_the_date() ?>
                </span>
                <h4 class="post-title">
                    <?php the_title(); ?>
                </h4>
                <p class="post-short">
                    <?php the_field('short_text'); ?>
                </p>
                <div class="post-long">
                    <?php (the_content()) ? the_content() : the_field('sobre_a_vaga'); ?>
                </div>
            </div>

        </article>
    <?php endwhile; ?>
    <?php
    if (get_the_category()[0]->name !== 'Blog') {
        include("recruitForm.php");
    }
    ?>

</main>


<?php get_footer(); ?>