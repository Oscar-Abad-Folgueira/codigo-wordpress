<?php
/**
 * @snippet       WooCommerce Snippet: Borrar el contenido del carrito cuando salen los clientes de su cuenta
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/
 */
 
add_action('clear_auth_cookie', 'oaf_borrar_contenido_carrito');

function oaf_borrar_contenido_carrito() {
	global $woocommerce;
	$woocommerce->cart->empty_cart();
}