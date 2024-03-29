<?php
/*
Template Name: Página de Blog
*/

get_header(); ?>

<div id="primary" class="container">
    <main id="main" class="col">
        <p>
            <?php the_title(); ?>
        </p>
        <h2>Nosso blog</h2>
        <p class="titulo">
            <?= get_the_content(); ?>
        </p>

        <?php
        $args = array(
            'post_type' => 'post',
            'category_name' => 'Blog'
        );
        $query = new WP_Query($args);
        if ($query->have_posts()):
            while ($query->have_posts()):
                $query->the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>">
                    <div class="py-4 d-flex flex-column">
                        <a href="<?php the_permalink(); ?>">
                            <h4 class="entry-title">
                                <?php the_title(); ?>
                            </h4>
                        </a>
                        <p class="post-date align-items-center d-flex"><i class="fa fa-calendar mr-2" aria-hidden="true"></i>
                            <?php the_date() ?>
                        </p>
                        <p class="post-content">
                            <?php the_excerpt(); ?>
                        </p>
                        <a class="button" href="<?php the_permalink(); ?>">Leia mais</a>
                    </div>
                </article>

            <?php endwhile;
            the_posts_pagination();
            wp_reset_postdata();
        else:
            echo 'Nenhum post encontrado.';
        endif; ?>
    </main>
</div>
<?php get_footer(); ?>