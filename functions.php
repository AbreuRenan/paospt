<?php
function load_custom_Styles()
{
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style('posts', get_template_directory_uri() . '/css/posts.css');
    wp_enqueue_style('wpcf7', get_template_directory_uri() . '/css/wpcf7.css');
}
function load_custom_Sripts()
{
    wp_enqueue_script('wpcf7', get_template_directory_uri() . '/js/wpcf7.js');
}

add_action('wp_enqueue_scripts', 'load_custom_Styles');
add_action('wp_enqueue_scripts', 'load_custom_Sripts', 90, 1);

function option_callback($data, $options, $args)
{
    $data = [];
    $args = ['post_type' => 'post',];
    $query = new WP_Query($args);
    $queryData = [];
    if ($query->have_posts()):
        while ($query->have_posts()):
            $query->the_post();
            $queryData[] = get_field('rotulo_form');
        endwhile;
    endif;


    foreach ($options as $option) {

        if ($option === 'checkbox_options') {
            $data = array_merge($data, $queryData);
        }

        if ($option === 'radio_options') {
            $data = array_merge($data, $queryData);
        }

        if ($option === 'vagas') {
            $data = array_merge($data, $queryData);
        }
    }
    return $data;
}
add_filter('wpcf7_form_tag_data_option', 'option_callback', 10, 3);
?>