<?php
$phpScriptsDirectory = WP_CONTENT_DIR . '/themes/paos/php/';
require_once $phpScriptsDirectory . 'wpcf7scripts.php';
require_once $phpScriptsDirectory . 'cmb2scripts.php';
function load_custom_Styles()
{
    wp_enqueue_style('home', get_template_directory_uri() . '/css/home.css');
    wp_enqueue_style('header', get_template_directory_uri() . '/css/header.css');
    wp_enqueue_style('posts', get_template_directory_uri() . '/css/posts.css');
    wp_enqueue_style('wpcf7', get_template_directory_uri() . '/css/wpcf7.css');
    wp_enqueue_style('modal', get_template_directory_uri() . '/css/modal.css');
    wp_enqueue_style('sobre', get_template_directory_uri() . '/css/sobre.css');
    wp_enqueue_style('footer', get_template_directory_uri() . '/css/footer.css');
    wp_enqueue_style('politica_termos', get_template_directory_uri() . '/css/politica_termos.css');
    wp_enqueue_style('smart-office', get_template_directory_uri() . '/css/smart-office.css');
    wp_enqueue_style('area_atuacao', get_template_directory_uri() . '/css/area_atuacao.css');
    wp_enqueue_style('area_tech', get_template_directory_uri() . '/css/area_tech.css');
    wp_enqueue_style('menumobile', get_template_directory_uri() . '/css/menumobile.css');
    wp_enqueue_style('contato_banner', get_template_directory_uri() . '/css/contato_banner.css');
}
function load_custom_Sripts()
{
    wp_enqueue_script('wpcf7', get_template_directory_uri() . '/js/wpcf7.js');
    wp_enqueue_script('modal', get_template_directory_uri() . '/js/modal.js');
    wp_enqueue_script('captchaBadgeObserver', get_template_directory_uri() . '/js/captchaBadgeObserver.js');
    wp_enqueue_script('menumobile', get_template_directory_uri() . '/js/menumobile.js');
}
add_action('wp_enqueue_scripts', 'load_custom_Styles');
add_action('wp_enqueue_scripts', 'load_custom_Sripts', 90, 1);
add_action('cmb2_admin_init', 'cmb2_fields_pagina_SobreNos');


add_filter('wpcf7_form_tag', 'custom_wpcf7_submit_button', 10, 2);
add_filter('wpcf7_form_tag_data_option', 'wpcf7_custom_options', 10, 3);


remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_post_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');
?>