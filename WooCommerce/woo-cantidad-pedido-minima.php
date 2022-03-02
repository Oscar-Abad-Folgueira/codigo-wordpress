<?php
/**
 * @snippet       WooCoomerce Snippet - Establecer una catidad mínima de pedido para poder comprar y mostrar aviso.
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/
 */

add_action( 'woocommerce_checkout_process', 'oaf_wc_cantidad_pedido_minima' );
add_action( 'woocommerce_before_cart' , 'oaf_wc_cantidad_pedido_minima' );
 
function oaf_wc_cantidad_pedido_minima() {
    $minimo = 35; // establecemos el pedido mínimo a 35 euros.

    if ( WC()->cart->total < $minimo ) {

			wc_add_notice( 
					sprintf( 'El total de tu pedido es de %s — Compra algo más para llegar a la cantidad mínima de pedido ' , 
							wc_price( WC()->cart->total ), 
							wc_price( $minimo )
					), 'error' 
			);
    }
}