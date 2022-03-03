<?php
/**
 * @snippet       WooCommerce Snippet: Añadir un botón de "Seguir comprando" en el carrito de WooCommerce.
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/anadir-boton-de-seguir-comprando-en-la-pagina-del-carrito-de-woocommerce/
 */

add_action( 'woocommerce_before_cart_table', 'woo_add_continue_shopping_button_to_cart' );

function woo_add_continue_shopping_button_to_cart() {
 $shop_page_url = get_permalink( woocommerce_get_page_id( 'shop' ) );

 echo ' <a href="'.$shop_page_url.'" class="button">Seguir comprando</a>';
}