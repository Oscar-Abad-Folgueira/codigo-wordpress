<?php
/**
 * @snippet       WooCoomerce Snippet - Añadir botón de "Seguir Comprando" o "Volver a la tienda" en la página del carrito de WooCommerce
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/anadir-un-boton-de-continuar-comprando-o-volver-a-la-tienda-en-la-pagina-del-carrito-de-woocommerce
 */
 
function oaf_woocommerce_boton_seguir_comprando_carrito(  ) {

	$tienda_url = get_permalink( woocommerce_get_page_id( 'shop' ) );  // obtener la url de la página de tienda
	?>
	<a class="button wc-backward" href="<?php echo $tienda_url ?>">
		Seguir comprando
	</a>
	<?php
}

add_action( 'woocommerce_cart_actions', 'oaf_woocommerce_boton_seguir_comprando_carrito', 10, 0 );