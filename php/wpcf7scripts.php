<?php
// require_once("../../../../wp-load.php");

function wpcf7_custom_options($data, $options, $args)
{
    $data = [];
    $data[] = 'Candidatura Espontânea';
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
        if ($option === 'vagas') {
            $data = array_merge($data, $queryData);
        }
    }
    return $data;
}
function custom_wpcf7_submit_button($tag, $unused) {
    if ($tag['name'] == 'submit') {
        $tag['raw_values'][] = 'data-lang="recrutamento-form-enviarBtn"'; // Add your desired data attribute
    }
    return $tag;
}

// add_filter('wpcf7_form_tag_data_option', 'wpcf7_custom_options', 10, 3);
?>