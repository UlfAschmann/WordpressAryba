<?php
/*
 * Plugin Name: Aryba Extra Fields
 * Plugin URI: http://www.shimonure.com
 * Description: Plugin para BackEnd de Aryba
 * Version: 1.0
 * Author: Rogelio Vargas
 * Author URI: 
 * License: GPLv2
 */



/*
 * ACF Integration
 */
// 1. customize ACF path
add_filter('acf/settings/path', 'my_acf_settings_path');
function my_acf_settings_path($path) {
    // update path
    $path = plugin_dir_path( __FILE__ ) . '/acf/';
    // return
    return $path;
}

// 2. customize ACF dir
add_filter('acf/settings/dir', 'my_acf_settings_dir');
function my_acf_settings_dir($dir) {
    // update path
    $dir = plugin_dir_url( __FILE__ ) . '/acf/';
    // return
    return $dir;
}

// 3. Hide ACF field group menu item
add_filter('acf/settings/show_admin', '__return_false');

// 4. Include ACF
include_once( plugin_dir_path( __FILE__ ) . '/acf/acf.php' );


/*
 * CUSTOM POST TYPE
 */
include_once( plugin_dir_path( __FILE__ ) . '/custom_post_type.php' );

/*
 * CUSTOM FIELDS
 */
include_once( plugin_dir_path( __FILE__ ) . '/custom_fields_proyectos.php' );
include_once( plugin_dir_path( __FILE__ ) . '/custom_fields_desarrollos.php' );
include_once( plugin_dir_path( __FILE__ ) . '/custom_fields_extras.php' );



/*
 * CUSTOM TAXONOMIES
 */
include_once( plugin_dir_path( __FILE__ ) . '/custom_taxonomies.php' );

/*
 * OPTIONS PAGE
 */
include_once( plugin_dir_path( __FILE__ ) . '/options_pages.php' );