<?php
/**
 * @snippet       WooCommerce Snippet: Establecer cantidad de compra de productos en WooCommerce de 2 en 2
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/establecer-que-solo-se-puedan-comprar-cantidad-de-2-en-2-en-woocommerce/
 */
 
add_filter( 'woocommerce_quantity_input_args', 'woocommerce_quanty_imput_step', 10, 2 ); // Simple products

function woocommerce_quanty_imput_step( $args, $product ) {

	if ( is_singular( 'product' ) ) {
		$args['input_value'] = 2;	// Valor de comienzo
	}
	$args['step'] = 2;  // de 2 en 2.
	$args['min_value'] = 2;  // Valor mínimo de cantidad
	return $args;
}