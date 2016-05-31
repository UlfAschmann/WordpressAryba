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