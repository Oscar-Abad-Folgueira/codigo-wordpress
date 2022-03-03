<?php
/**
 * @snippet       WooCommerce Snippet: Comprobar si un producto está en el carrito de WooCommerce y si está, añadir otro producto de regalo
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/comprobar-si-un-producto-esta-en-el-carrito-de-woocommerce/
 */

add_action( 'template_redirect', 'check_if_product_in_cart' );
   
function check_if_product_in_cart() {
           
	$producto_promocion = 22; // Producto promoción
	$producto_regalo = 80;  // Producto regalo

	$producto_promocion_cart = WC()->cart->generate_cart_id( $producto_promocion );
	$in_cart_producto_promocion = WC()->cart->find_product_in_cart( $producto_promocion_cart );
	
	if ( $in_cart_producto_promocion ) {

		$producto_regalo_cart = WC()->cart->generate_cart_id( $producto_regalo );
		$in_cart_producto_regalo = WC()->cart->find_product_in_cart( $producto_regalo_cart );
		if ( !$in_cart_producto_regalo ){
			WC()->cart->add_to_cart( $producto_regalo );
		}
		
	} 
}