<?php
/**
 * @snippet       Añadir texto en la parte superior del checkout de WooCommerce
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/woocommerce-snippet-anadir-texto-o-html-en-la-parte-superior-del-checkout-finalizar-compra/
 */

add_action( 'woocommerce_before_checkout_form', 'add_checkout_top_text', 11 );

function add_checkout_top_text() {
  
    wc_print_notice( '<h3 style="color:red;">Solo te queda un paso más para finalizar la compra!!</h3>' );
}