<?php get_header(); ?>

    <main >
        <?php while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <div class="container">
                    <h1><?php the_title(); ?></h1>
                    <div><?php the_content(); ?></div>
                </div>

            </article>
        <?php endwhile; ?>
    </main>


<?php get_footer(); ?>