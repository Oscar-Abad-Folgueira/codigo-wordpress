<?php
/**
 * @snippet       WooCommerce Snippet: Añadir botón "Seguir comprando" tras añadir productos al carrito
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/anadir-el-boton-de-seguir-comprando-tras-anadir-productos-al-carrito-en-woocommerce
 */

add_filter( 'wc_add_to_cart_message_html', 'anadir_boton_seguir_comprando_anadir_carrito', 10, 2);
function anadir_boton_seguir_comprando_anadir_carrito( $message, $products ){

		$message .= sprintf( '<br/><a href="%s" class="button wc-forward" style="clear:both;margin-top:5px;">%s</a>', esc_url( wc_get_page_permalink( 'shop' ) ), esc_html__( 'Seguir comprando', 'woocommerce' ) );

	return $message;
}