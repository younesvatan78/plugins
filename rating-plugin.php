<?php
/*
Plugin name: Rate products
Version: 1.0.0
Author: Younes
*/


function add_rating(){
    global $woocommerce, $post;
    echo '<div class=" product_custom_field ">';

    woocommerce_wp_text_input(
        array(
            'id' => '_custom_product_rating_field',
            'placeholder' => 'Custom Product Rating Field',
            'label' => __('Raing', 'woocommerce'),
            'type' => 'number',
            'custom_attributes' => array(
                'step' => 'any',
                'min' => '0'
            )
        )
    );


    echo '</div>';
}
add_action( 'woocommerce_product_options_general_product_data', 'add_rating' ); 


