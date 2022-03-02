<?php
/**
 * @snippet       WooCoomerce Snippet - Añadir un nuevo estado de pedido en WooCommerce
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/anadir-un-nuevo-estado-de-pedido-en-woocommerce
 */
 
// Registrar nuevo estado de pedido "Enviado"
function registrar_estado_pedido_enviado() {
	register_post_status( 'wc-pedido-enviado', array(
			'label'                     => 'Enviado',
			'public'                    => true,
			'exclude_from_search'       => false,
			'show_in_admin_all_list'    => true,
			'show_in_admin_status_list' => true,
			'label_count'               => _n_noop( 'Enviado (%s)', 'Enviados (%s)' )
	) );
}
add_action( 'init', 'registrar_estado_pedido_enviado' );

// Añadir el nuevo estado a la lista de estados
function anadir_estado_pedido_enviado_a_estados( $order_statuses ) {
 
	$new_order_statuses = array();
	foreach ( $order_statuses as $key => $status ) {
			$new_order_statuses[ $key ] = $status;
			if ( 'wc-processing' === $key ) {
					$new_order_statuses['wc-pedido-enviado'] = 'Enviado';
			}
	}
	return $new_order_statuses;
}

add_filter( 'wc_order_statuses', 'anadir_estado_pedido_enviado_a_estados' );