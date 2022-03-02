<?php
/**
 * @snippet       WooCoomerce Snippet - Crear un campo personalizao y que se muestre en varios sitios.
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/crear-un-campo-personalizado-para-woocommerce-y-que-se-muestre-en-varios-sitios
 */

// Mostrar el campo cumpleaños en el checkout y en mi cuenta
add_filter( 'woocommerce_billing_fields', 'oaf_mostrar_campo_cumpleanios', 20, 1 );
function oaf_mostrar_campo_cumpleanios($billing_fields) {

    $billing_fields['billing_cumpleanios'] = array(
        'type'        => 'date',
        'label'       => __('Cumpleaños'),
        'class'       => array('form-row-wide'),
        'priority'    => 25,
        'required'    => true,
        'clear'       => true,
    );
    return $billing_fields;
}

// Guardar el valor del campo cumpleaños como meta del usuario
add_action( 'woocommerce_checkout_update_customer', 'oaf_guardar_campo_cumpleanios', 10, 2 );
function oaf_guardar_campo_cumpleanios( $customer, $data ){
    if ( isset($_POST['billing_cumpleanios']) && ! empty($_POST['billing_cumpleanios']) ) {
         $customer->update_meta_data( 'billing_cumpleanios', sanitize_text_field($_POST['billing_cumpleanios']) );
    }
}

// Campo cumpleaños admin pedidos
add_filter('woocommerce_admin_billing_fields', 'oaf_campo_cumpleanios_admin_pedidos');
function oaf_campo_cumpleanios_admin_pedidos( $fields ) {
    $fields['cumpleanios'] = array( 'label' => __('Cumpleaños', 'woocommerce') );

    return $fields;
}

// Usuario de WordPress: Añadir el campo cumpleaños como editable
add_filter('woocommerce_customer_meta_fields', 'oaf_usuario_wp_campo_cumpleanios_editable');
function oaf_usuario_wp_campo_cumpleanios_editable( $fields ) {
    $fields['billing']['fields']['billing_cumpleanios'] = array(
        'label'       => __('Cumpleaños', 'woocommerce'),
        'description' => __('', 'woocommerce')
    );
    return $fields;
}