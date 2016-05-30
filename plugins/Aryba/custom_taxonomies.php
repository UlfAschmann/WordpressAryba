<?php

/*
 * REgistro de la Taxonomia para los Proyectos
 */
if ( !function_exists('categoria_proyecto_taxonomy') ) {
    function categoria_proyecto_taxonomy() {

            $labels = array(
                    'name'                       => _x( 'Categorías', 'Taxonomy General Name', 'aryba_textdomain' ),
                    'singular_name'              => _x( 'Categoría', 'Taxonomy Singular Name', 'aryba_textdomain' ),
                    'menu_name'                  => __( 'Categoría', 'aryba_textdomain' ),
                    'all_items'                  => __( 'Todas las categorías', 'aryba_textdomain' ),
                    'parent_item'                => __( 'Superior', 'aryba_textdomain' ),
                    'parent_item_colon'          => __( 'Superior:', 'aryba_textdomain' ),
                    'new_item_name'              => __( 'Nueva Categoría', 'aryba_textdomain' ),
                    'add_new_item'               => __( 'Nueva Categoría', 'aryba_textdomain' ),
                    'edit_item'                  => __( 'Editar Categoría', 'aryba_textdomain' ),
                    'update_item'                => __( 'Actualizar Categoría', 'aryba_textdomain' ),
                    'view_item'                  => __( 'Ver Categoría', 'aryba_textdomain' ),
                    'separate_items_with_commas' => __( 'Separar con comas', 'aryba_textdomain' ),
                    'add_or_remove_items'        => __( 'Agregar o remover', 'aryba_textdomain' ),
                    'choose_from_most_used'      => __( 'Categorías más utilizadas', 'aryba_textdomain' ),
                    'popular_items'              => __( 'Categorías populares', 'aryba_textdomain' ),
                    'search_items'               => __( 'Buscar', 'aryba_textdomain' ),
                    'not_found'                  => __( 'No encontrada', 'aryba_textdomain' ),
                    'items_list'                 => __( 'Lista de Categorías', 'aryba_textdomain' ),
                    'items_list_navigation'      => __( 'Listar categorías nav', 'aryba_textdomain' ),
            );
            $rewrite = array(
                    'slug'                       => 'categoria_proyectos',
                    'with_front'                 => true,
                    'hierarchical'               => false,
            );
            $args = array(
                    'labels'                     => $labels,
                    'hierarchical'               => true,
                    'public'                     => true,
                    'show_ui'                    => true,
                    'show_admin_column'          => true,
                    'show_in_nav_menus'          => true,
                    'show_tagcloud'              => true,
                    'rewrite'                    => $rewrite,
            );
            register_taxonomy( 'categoria_proyectos', array( 'proyectos','desarrollos' ), $args );

    }
    add_action( 'init', 'categoria_proyecto_taxonomy', 0 );
}
