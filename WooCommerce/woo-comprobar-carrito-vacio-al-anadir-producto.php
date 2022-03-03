<?php
/**
 * @snippet       WooCommerce Snippet: Comprobar si el carrito de WooCommerce está vacío y si es así, añadir un producto
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/funcion-woocommerce-para-comprobar-si-el-carrito-esta-vacio/
 */
 
add_action( 'template_redirect', 'add_product_if_cart_empty' );
   
function add_product_if_cart_empty() {
           
  $product_id = 80; // producto a añadir al carrito si está vacío

	if ( WC()->cart->is_empty() ){ // Comprobar si el carrito está vacío
		WC()->cart->add_to_cart( $product_id ); // Añadir producto al carrito
	}
}