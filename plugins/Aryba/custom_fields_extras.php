<?php

/**
 * Definición de los Custom Fields Extras 
 */
if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group(array(
        'key' => 'acf_customfields_home', //Este identificador debe ser unico
        'title' => 'Información extra para el Home',
        'fields' => array(
            /*
             * CARRUSEL PRINCIPAL
             */
            array(
                'key' => 'extras_home_tab_1',
                'label' => 'Carrusel Principal',
                'name' => '',
                'type' => 'tab',
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
            ),
            array(
                'key' => 'extras_home_1',
                'label' => 'Elementos o Items',
                'name' => 'extras_home_carrusel_principal',
                'type' => 'repeater',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => true,
                //'min' => 3,
                //'max' => 3,
                'layout' => 'row',
                'sub_fields' => array(
                    array(
                        'key' => 'extras_home_carrusel_item_1',
                        'label' => 'Título',
                        'placeholder' => 'Un título para el proyecto',
                        'name' => 'extras_home_carrusel_item_titutlo',
                        'type' => 'text',
                        'required' => 1,
                    ),
                    array(
                        'key' => 'extras_home_carrusel_item_2',
                        'label' => 'Subtítulo',
                        'placeholder' => 'Un subtítulo para el proyecto',
                        'name' => 'extras_home_carrusel_item_subtitutlo',
                        'type' => 'text',
                        'required' => 1,
                    ),
                    array(
                        'key' => 'extras_home_carrusel_item_3',
                        'label' => 'Mensaje boton',
                        'placeholder' => 'Mensaje del boton',
                        'name' => 'extras_home_carrusel_item_boton',
                        'type' => 'text',
                        'required' => 1,
                    ),
                    array(
                        'key' => 'extras_home_carrusel_item_4',
                        'label' => 'URL boton',
                        'placeholder' => 'URL del boton',
                        'name' => 'extras_home_carrusel_item_url',
                        'type' => 'text',
                        'required' => 1,
                    ),
                    array(
                        'key' => 'extras_home_carrusel_item_5',
                        'label' => 'Imagen',
                        'name' => 'extras_home_carrusel_item_imagen',
                        'type' => 'image',
                        'required' => 1,
                        //'instructions' => 'El tamaño sugerido 750 x 340px',
                        'save_format' => 'object',
                        'preview_size' => 'thumbnail',
                        'library' => 'all',
                    //'min_width' => 750,
                    //'min_height' => 340,
                    //'max_width' => 750,
                    //'max_height' => 340,
                    ),
                ),
            ),
            /*
             * BIENVENIDOS
             */
            array(
                'key' => 'extras_home_tab_2',
                'label' => 'Bienvenidos',
                'name' => '',
                'type' => 'tab',
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
            ),
            array(
                'key' => 'extras_home_bienvenidos_1',
                'label' => 'Imagenes',
                'name' => 'extras_home_bienvenidos',
                'type' => 'repeater',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => true,
                //'min' => 3,
                //'max' => 3,
                'layout' => 'row',
                'sub_fields' => array(
                    array(
                        'key' => 'extras_home_bienvenidos_item_1',
                        'label' => 'Imagen',
                        'name' => 'extras_home_bienvenidos_imagen',
                        'type' => 'image',
                        'required' => 1,
                        //'instructions' => 'El tamaño sugerido 750 x 340px',
                        'save_format' => 'object',
                        'preview_size' => 'thumbnail',
                        'library' => 'all',
                    //'min_width' => 750,
                    //'min_height' => 340,
                    //'max_width' => 750,
                    //'max_height' => 340,
                    ),
                ),
            ),
            /*
             * NUESTROS NÚMEROS
             */
            array(
                'key' => 'extras_home_tab_3',
                'label' => 'Nuestros números',
                'name' => '',
                'type' => 'tab',
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
            ),
            array(
                'key' => 'extras_home_numeros_1',
                'label' => 'Fondo',
                'name' => 'extras_home_numeros_fondo',
                'type' => 'image',
                'required' => 1,
                //'instructions' => 'El tamaño sugerido 750 x 340px',
                'save_format' => 'object',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            //'min_width' => 750,
            //'min_height' => 340,
            //'max_width' => 750,
            //'max_height' => 340,
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'admin-home-page',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array(
            'position' => 'normal',
            'hide_on_screen' => array(
            ),
        ),
        'menu_order' => 0,
    ));

    /*
     * SERVICIOS
     */
    acf_add_local_field_group(array(
        'key' => 'acf_customfields_servicios', //Este identificador debe ser unico
        'title' => 'Información extra para Servicios',
        'fields' => array(

            array(
                'key' => 'extras_servicios_1',
                'label' => 'Imagen Principal',
                'name' => 'extras_servicios_imagen_1',
                'type' => 'image',
                'required' => 0,
                'save_format' => 'object',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
            array(
                'key' => 'extras_servicios_2',
                'label' => 'Imagen Arquitectura',
                'name' => 'extras_servicios_imagen_2',
                'type' => 'image',
                'required' => 0,
                'save_format' => 'object',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
             array(
                'key' => 'extras_servicios_3',
                'label' => 'Imagen Comercialización',
                'name' => 'extras_servicios_imagen_3',
                'type' => 'image',
                'required' => 0,
                'save_format' => 'object',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
            array(
                'key' => 'extras_servicios_4',
                'label' => 'Imagen Construcción',
                'name' => 'extras_servicios_imagen_4',
                'type' => 'image',
                'required' => 0,
                'save_format' => 'object',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
            array(
                'key' => 'extras_servicios_5',
                'label' => 'Imagen Administración de Activos',
                'name' => 'extras_servicios_imagen_5',
                'type' => 'image',
                'required' => 0,
                'save_format' => 'object',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
           
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'admin-servicios-page',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array(
            'position' => 'normal',
            'hide_on_screen' => array(
            ),
        ),
        'menu_order' => 0,
    ));
    
    
    /*
     * QUIENES SOMOS
     */
    acf_add_local_field_group(array(
        'key' => 'acf_customfields_quienessomos', //Este identificador debe ser unico
        'title' => 'Información extra para Quiénes Somos',
        'fields' => array(
            
            array(
                'key' => 'extras_quienessomos_01',
                'label' => 'Título Video',
                'name' => 'extras_quienessomos_video_titulo',
                'type' => 'text',
                'required' => 0,
            ),
            array(
                'key' => 'extras_quienessomos_02',
                'label' => 'Mensaje Video',
                'name' => 'extras_quienessomos_video_mensaje',
                'type' => 'textarea',
                'required' => 0,
            ),
            
            array(
                'key' => 'extras_quienessomos_0',
                'label' => 'ID VIDEO de Youtube',
                'name' => 'extras_quienessomos_video',
                'type' => 'text',
                'required' => 0,
            ),
            array(
                'key' => 'extras_quienessomos_1',
                'label' => 'Imagen Principal',
                'name' => 'extras_quienessomos_imagen_1',
                'type' => 'image',
                'required' => 0,
                'save_format' => 'object',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
            array(
                'key' => 'extras_quienessomos_2',
                'label' => 'Imagen Historia',
                'name' => 'extras_quienessomos_imagen_2',
                'type' => 'image',
                'required' => 0,
                'save_format' => 'object',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
            array(
                'key' => 'extras_quienessomos_3',
                'label' => 'Imagen Números',
                'name' => 'extras_quienessomos_imagen_3',
                'type' => 'image',
                'required' => 0,
                'save_format' => 'object',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
            array(
                'key' => 'extras_quienessomos_4',
                'label' => 'Imagen Filosofía',
                'name' => 'extras_quienessomos_imagen_4',
                'type' => 'image',
                'required' => 0,
                'save_format' => 'object',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'admin-quienessomos-page',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array(
            'position' => 'normal',
            'hide_on_screen' => array(
            ),
        ),
        'menu_order' => 0,
    ));
    
}