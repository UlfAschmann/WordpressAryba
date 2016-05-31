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
                        'required' => 0,
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