<?php

/**
 * Definición de los Custom Fields usando ACF para los Proyectos
 */
if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group(array(
        'key' => 'acf_customfields_desarrollos', //Este identificador debe ser unico
        'title' => 'Información extra para los Proyectos',
        'fields' => array(
            array(
                'key' => 'desarrollos_customfield_0',
                'label' => 'Lugar del Desarrollo',
                'placeholder' => 'Miguel Hidalgo, Ciudad de México',
                'name' => 'desarrollos_lugar',
                'type' => 'text',
                'required' => 0,
            ),
            array(
                'key' => 'desarrollos_customfield_1',
                'label' => 'Imagen del Home Desarrollos',
                'name' => 'desarrollos_imagen_home',
                'type' => 'image',
                'required' => 0,
                //'instructions' => 'El tamaño sugerido 750 x 340px',
                'save_format' => 'object',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            //'min_width' => 750,
            //'min_height' => 340,
            //'max_width' => 750,
            //'max_height' => 340,
            ),
            array(
                'key' => 'desarrollos_customfield_2',
                'label' => 'Galería',
                'name' => 'desarrollos_galeria',
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
                        'key' => 'desarrollos_customfield_item_1',
                        'label' => 'Imagen',
                        'name' => 'desarrollos_galeria_imagen',
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
            array(
                'key' => 'desarrollos_customfield_3',
                'label' => 'Detalles',
                'name' => 'desarrollos_detalles',
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
                        'key' => 'desarrollos_customfield_detalles_1',
                        'label' => 'Título',
                        'name' => 'desarrollos_detalles_titulo',
                        'type' => 'text',
                        'required' => 1,
                    ),
                    array(
                        'key' => 'desarrollos_customfield_detalles_2',
                        'label' => 'Descripción',
                        'name' => 'desarrollos_detalles_descripcion',
                        'type' => 'text',
                        'required' => 1,
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'desarrollos',
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


if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group(array(
        'key' => 'acf_customfields_desarrollos_page', //Este identificador debe ser unico
        'title' => 'Información extra para los Desarrollos',
        'fields' => array(
            /*
            array(
                'key' => 'desarrollos_page_customfield_0',
                'label' => 'Banner Principal',
                'name' => 'desarrollos_page_imagen',
                'type' => 'text',
                'required' => 0,
            ),
             * 
             */
            array(
                'key' => 'desarrollos_page_customfield_0',
                'label' => 'Banner Principal',
                'name' => 'desarrollos_page_imagen',
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
                    'value' => 'admin-desarrollos-page',
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