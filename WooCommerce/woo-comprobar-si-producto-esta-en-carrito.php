<?php
/**
 * @snippet       WooCommerce Snippet: Comprobar si un producto está en el carrito de WooCommerce
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/comprobar-si-un-producto-esta-en-el-carrito-de-woocommerce/
 */

add_action( 'template_redirect', 'check_if_product_in_cart' );
   
function check_if_product_in_cart() {
           
	$product_id = 80;
	$product_cart_id = WC()->cart->generate_cart_id( $product_id );
	$in_cart = WC()->cart->find_product_in_cart( $product_id );
	if ( !$in_cart ) {
		
		WC()->cart->add_to_cart( $product_id );
	}
}