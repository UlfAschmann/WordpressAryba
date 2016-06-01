<?php
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page( array(
        'page_title' => 'Información extra para la Home',
        'menu_title' => 'Home',
        'menu_slug' => 'admin-home-page',
        'capability' => 'manage_options',
        'icon_url' => 'dashicons-admin-home', 
        'position' => 25,
        'redirect' => false
    ));  
}

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page( array(
        'page_title' => 'Información extra para Quiénes Somos',
        'menu_title' => 'Quiénes Somos',
        'menu_slug' => 'admin-quienessomos-page',
        'capability' => 'manage_options',
        'icon_url' => 'dashicons-admin-users', 
        'position' => 26,
        'redirect' => false
    ));  
}


if( function_exists('acf_add_options_page') ) {
    acf_add_options_page( array(
        'page_title' => 'Información extra para Servicios',
        'menu_title' => 'Servicios',
        'menu_slug' => 'admin-servicios-page',
        'capability' => 'manage_options',
        'icon_url' => 'dashicons-admin-tools', 
        'position' => 27,
        'redirect' => false
    ));  
}



if( function_exists('acf_add_options_sub_page') ) {
    acf_add_options_sub_page(array(
        'page_title' 	=> 'Información extra para Desarrollos',
        'menu_slug'     => 'admin-desarrollos-page', 
        'menu_title'	=> 'Página',
        'parent_slug'	=> 'edit.php?post_type=desarrollos',
    ));
}

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page( array(
        'page_title' => 'Información extra para Socios',
        'menu_title' => 'Socios',
        'menu_slug' => 'admin-socios-page',
        'capability' => 'manage_options',
        'icon_url' => 'dashicons-groups', 
        'position' => 28,
        'redirect' => false
    ));  
}

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page( array(
        'page_title' => 'Información extra para Socios',
        'menu_title' => 'Premios',
        'menu_slug' => 'admin-premios-page',
        'capability' => 'manage_options',
        'icon_url' => 'dashicons-star-filled', 
        'position' => 29,
        'redirect' => false
    ));  
}

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page( array(
        'page_title' => 'Información extra para Contacto',
        'menu_title' => 'Contacto',
        'menu_slug' => 'admin-contacto-page',
        'capability' => 'manage_options',
        'icon_url' => 'dashicons-email-alt', 
        'position' => 29,
        'redirect' => false
    ));  
}

