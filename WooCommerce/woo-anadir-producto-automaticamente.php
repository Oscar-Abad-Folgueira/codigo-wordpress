<?php
/**
 * @snippet       WooCommerce Snippet: Añadir un producto al carrito de Woocommerce automaticamente con código
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/anadir-un-producto-al-carrito-de-woocommerce-automaticamente-mediante-codigo/
 */
 
add_action( 'template_redirect', 'add_product_to_cart_automatically' );
   
function add_product_to_cart_automatically() {
           
   $product_id = 80;

   if ( WC()->cart->get_cart_contents_count() == 0 ) {
      WC()->cart->add_to_cart( $product_id );
   }
}