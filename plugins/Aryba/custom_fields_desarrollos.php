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