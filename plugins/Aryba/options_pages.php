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
