<?php
/**
 * @snippet       WooCommerce Snippet: Ocultar los avisos de actualizar el carrito de WooCommerce
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/no-mostrar-los-mensajes-de-aviso-de-woocommerce-al-actualizar-el-carrito/
 */

// Ocultar los avisos al actualizar carrito
function clear_notices_on_cart_update() { 
	wc_clear_notices();
}; 

add_filter( 'woocommerce_update_cart_action_cart_updated', 'clear_notices_on_cart_update', 10, 1 ); 