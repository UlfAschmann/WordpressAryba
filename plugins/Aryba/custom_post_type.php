<?php
//--------------------------------------------- 
//Post Type: Desarrollos
//Descripción: Declaración del post_type desarrollos
//----------------------------------------------
//Para evitar definir si es que existe un post del mismo tipo
if ( ! function_exists('desarrollos_post_type') ) {
	//Registrando el Post Type
	function desarrollos_post_type() {
            $labels = array(
		'name'               => _x( 'Desarrollos', 'Nombre general del post type', 'aryba_textdomain' ),
		'singular_name'      => _x( 'Desarrollo', 'Nombre singular del post type', 'aryba_textdomain' ),
		'menu_name'          => _x( 'Desarrollos', 'Admin menu', 'aryba_textdomain' ),
		'name_admin_bar'     => _x( 'Desarrollos', 'Agregar nuevo en la barra del admin', 'aryba_textdomain' ),
		'add_new'            => _x( 'Agregar Nuevo', 'aryba_textdomain' ),
		'add_new_item'       => __( 'Agregar Nuevo', 'aryba_textdomain' ),
		'new_item'           => __( 'Nuevo Desarrollo', 'aryba_textdomain' ),
		'edit_item'          => __( 'Editar Desarrollo', 'aryba_textdomain' ),
		'view_item'          => __( 'Ver Desarrollo', 'aryba_textdomain' ),
		'all_items'          => __( 'Listar todos', 'aryba_textdomain' ),
		'search_items'       => __( 'Buscar', 'aryba_textdomain' ),
		'parent_item_colon'  => __( 'Desarrollo Padre:', 'aryba_textdomain' ),
		'not_found'          => __( 'No encontrado.', 'aryba_textdomain' ),
		'not_found_in_trash' => __( 'No encontrado en la papelera.', 'aryba_textdomain' )
            );

            $args = array(
                    'label'               => __( 'Desarrollos', 'aryba_textdomain' ),
                    'description'         => __( 'Registro para la sección de desarrollos', 'aryba_textdomain' ),
                    'labels'              => $labels,
                    'supports'            => array( 'title', 'editor','' ),
                    'hierarchical'        => false,
                    'public'              => true,
                    'show_ui'             => true,
                    'show_in_menu'        => true,
                    'menu_position'       => 30,
                    'show_in_admin_bar'   => true,
                    'show_in_nav_menus'   => true,
                    'can_export'          => true,
                    'has_archive'         => true,		
                    'menu_icon'           => 'dashicons-admin-multisite',
                    'exclude_from_search' => false,
                    'publicly_queryable'  => true,
                    'capability_type'     => 'post',
            );

            register_post_type( 'desarrollos', $args );

	}
	add_action( 'init', 'desarrollos_post_type', 0 );
}


//--------------------------------------------- 
//Post Type: Proyectos
//Descripción: Declaración del post_type Proyectos
//----------------------------------------------
//Para evitar definir si es que existe un post del mismo tipo
if ( ! function_exists('proyectos_post_type') ) {
	//Registrando el Post Type
	function proyectos_post_type() {
            $labels = array(
		'name'               => _x( 'Proyectos', 'Nombre general del post type', 'aryba_textdomain' ),
		'singular_name'      => _x( 'Proyecto', 'Nombre singular del post type', 'aryba_textdomain' ),
		'menu_name'          => _x( 'Proyectos', 'Admin menu', 'aryba_textdomain' ),
		'name_admin_bar'     => _x( 'Proyectos', 'Agregar nuevo en la barra del admin', 'aryba_textdomain' ),
		'add_new'            => _x( 'Agregar Nuevo', 'aryba_textdomain' ),
		'add_new_item'       => __( 'Agregar Nuevo', 'aryba_textdomain' ),
		'new_item'           => __( 'Nuevo Proyecto', 'aryba_textdomain' ),
		'edit_item'          => __( 'Editar Proyecto', 'aryba_textdomain' ),
		'view_item'          => __( 'Ver Proyecto', 'aryba_textdomain' ),
		'all_items'          => __( 'Listar todos', 'aryba_textdomain' ),
		'search_items'       => __( 'Buscar', 'aryba_textdomain' ),
		'parent_item_colon'  => __( 'Proyecto Padre:', 'aryba_textdomain' ),
		'not_found'          => __( 'No encontrado.', 'aryba_textdomain' ),
		'not_found_in_trash' => __( 'No encontrado en la papelera.', 'aryba_textdomain' )
            );

            $args = array(
                    'label'               => __( 'Proyectos', 'aryba_textdomain' ),
                    'description'         => __( 'Registro para la sección de Proyectos', 'aryba_textdomain' ),
                    'labels'              => $labels,
                    'supports'            => array( 'title', 'editor','' ),
                    'hierarchical'        => false,
                    'public'              => true,
                    'show_ui'             => true,
                    'show_in_menu'        => true,
                    'menu_position'       => 31,
                    'show_in_admin_bar'   => true,
                    'show_in_nav_menus'   => true,
                    'can_export'          => true,
                    'has_archive'         => true,		
                    'menu_icon'           => 'dashicons-images-alt',
                    'exclude_from_search' => false,
                    'publicly_queryable'  => true,
                    'capability_type'     => 'post',
            );

            register_post_type( 'proyectos', $args );

	}
	add_action( 'init', 'proyectos_post_type', 0 );
}

