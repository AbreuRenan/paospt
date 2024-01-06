<?php
function mycmb2_get_field($field_key, $page_id = null)
{
    $id = $page_id !== null ? $page_id : get_the_ID();
    return get_post_meta($id, $field_key, true);
}

function cmb2_fields_pagina_SobreNos()
{
    $cmb_profile_box = new_cmb2_box([
        'id' => 'profile_box',
        'title' => 'Membros da Equipe',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => 'page-sobre-nos.php',
        ]
    ]);

    $profile_card = $cmb_profile_box->add_field([
        'name' => 'Adicionar Perfil',
        'id' => 'profile_cards',
        'type' => 'group',
        'repeatable' => true,
        'options' => [
            'group_title' => 'Perfil {#}',
            'add_button' => 'Adicionar Card',
            'remove_button' => 'Remover Card',
            'sortable' => true
        ]
    ]);
    $cmb_profile_box->add_group_field($profile_card, [
        'name' => 'Foto',
        'id' => 'card_foto',
        'type' => 'file',
        'preview_size' => [100, 100],
        'options' => [
            'url' => false,
        ],
    ]);
    $cmb_profile_box->add_group_field($profile_card, [
        'name' => 'Nome',
        'id' => 'card_nome',
        'type' => 'text',
    ]);
    $cmb_profile_box->add_group_field($profile_card, [
        'name' => 'Cargo',
        'id' => 'card_cargo',
        'type' => 'text',
    ]);
    $cmb_profile_box->add_group_field($profile_card, [
        'name' => 'Sobre',
        'id' => 'card_sobre',
        'type' => 'textarea_small',
    ]);
    $cmb_profile_box->add_group_field($profile_card, [
        'name' => 'Linkedin',
        'id' => 'card_linkedin',
        'type' => 'text',
    ]);

}
;