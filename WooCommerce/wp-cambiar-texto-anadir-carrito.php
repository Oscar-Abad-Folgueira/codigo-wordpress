<?php
/**
 * @snippet       WooCommerce Snippet: Cambiar el texto de "Añadir al carrito"
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/woocommerce-snippet-cambiar-el-texto-anadir-al-carrito/
 */
 
add_filter( 'woocommerce_product_add_to_cart_text', 'oaf_wc_change_add_to_cart_text' );
add_filter( 'woocommerce_product_single_add_to_cart_text', 'oaf_wc_change_add_to_cart_text' );

function oaf_wc_change_add_to_cart_text() {
  
  return __('¡Comprar Ya!', 'woocommerce');
}