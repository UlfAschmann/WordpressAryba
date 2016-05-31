<?php

/**
 * Definición de los Custom Fields Extras 
 */
if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group(array(
        'key' => 'acf_customfields_home', //Este identificador debe ser unico
        'title' => 'Información extra para el Home',
        'fields' => array(
            array(
                'key' => 'extras_home_1',
                'label' => 'Carrusel Principal',
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
}