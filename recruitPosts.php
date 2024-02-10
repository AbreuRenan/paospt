<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 10,
    'category_name' => 'vagas',
    'paged' => $paged
);
$query = new WP_Query($args);

if ($query->have_posts()):
    while ($query->have_posts()):
        $query->the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>">
            <div class="py-4 d-flex flex-column">
                <h4 class="entry-title">
                    <?php the_title(); ?>
                </h4>
                <p class="post-date align-items-center d-flex"><i class="fa fa-calendar mr-2" aria-hidden="true"></i>
                    <?php echo get_the_date() ?>
                </p>
                <p class="post-content">
                    <?php the_field('short_text'); ?>
                </p>
                <a class="button" href="<?php the_permalink(); ?>" data-lang="recrutamento-viewOffer-a">Ver Oferta</a>
            </div>
        </article>

    <?php endwhile;
    the_posts_pagination();
    wp_reset_postdata();
else:
    echo 'Nenhum post encontrado.';
endif; ?>