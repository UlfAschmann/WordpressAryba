<?php

/**
 * Definición de los Custom Fields usando ACF para los Proyectos
 */
if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group(array(
        'key' => 'acf_customfields_proyectos', //Este identificador debe ser unico
        'title' => 'Información extra para los Proyectos',
        'fields' => array(
            array(
                'key' => 'proyectos_customfield_0',
                'label' => 'Lugar del Proyecto',
                'placeholder' => 'Miguel Hidalgo, Ciudad de México',
                'name' => 'proyectos_lugar',
                'type' => 'text',
                'required' => 0,
            ),
            array(
                'key' => 'proyectos_customfield_1',
                'label' => 'Imagen del Home Proyectos',
                'name' => 'proyectos_imagen_home',
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
                    'value' => 'proyectos',
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