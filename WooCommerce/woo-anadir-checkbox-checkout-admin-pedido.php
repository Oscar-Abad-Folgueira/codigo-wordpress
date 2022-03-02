<?php
/**
 * @snippet       WooCommerce Snippet: Añadir campo checkbox al checkout y mostrar en el admin del pedido.
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/anadir-un-campo-de-checkbox-opcional-en-el-checkout-de-woocommerce-y-mostrar-en-el-admin-del-pedido
 */
 
 // Añadir un campo checkbox al checkout y al anadir_estado_pedido_enviado_a_estados
add_action( 'woocommerce_review_order_before_submit', 'anadir_campo_checkbox_checkout' );
function anadir_campo_checkbox_checkout() {
    echo '<div id="campo-envio-instrucciones">';

    woocommerce_form_field( 'cliente_quiere_instrucciones', array(
        'type'      => 'checkbox',
        'class'     => array('input-checkbox'),
        'label'     => __('¿Quieres que te enviemos las instrucciones por email?'),
    ),  WC()->checkout->get_value( 'cliente_quiere_instrucciones' ) );
    echo '</div>';
}

// Guardar el campo del checkout en los meta del pedido, cuando se ha checkeado el checkbox
add_action( 'woocommerce_checkout_update_order_meta', 'actualizar_meta_campo_checkout_instrucciones', 10, 1 );
function actualizar_meta_campo_checkout_instrucciones( $order_id ) {

    if ( ! empty( $_POST['cliente_quiere_instrucciones'] ) )
        update_post_meta( $order_id, 'cliente_quiere_instrucciones', $_POST['cliente_quiere_instrucciones'] );
}

// Mostrar el resultado del campo checkout en el admin del pedido
add_action( 'woocommerce_admin_order_data_after_billing_address', 'mostrar_campo_checkout_detalles_pedido_admin', 10, 1 );
function mostrar_campo_checkout_detalles_pedido_admin( $order ){
    $cliente_quiere_instrucciones = get_post_meta( $order->get_id(), 'cliente_quiere_instrucciones', true );
    if( $cliente_quiere_instrucciones == 1 ) {
        echo '<p><strong>¿Quiere instrucciones por email?: </strong> <span style="color:red;">SI</span></p>';
		} else {
				echo '<p><strong>¿Quiere instrucciones por email?: </strong> <span style="color:black;">NO</span></p>';
		}
}