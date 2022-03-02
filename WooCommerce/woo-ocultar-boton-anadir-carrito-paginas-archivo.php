<?php
/**
 * @snippet       WooCommerce Snippet: Ocultar los botones de "Añadir al carrito" en páginas de archivo
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/woocommerce-snippet-ocultar-los-botones-de-anadir-al-carrito-en-la-pagina-de-la-tienda-y-en-paginas-de-categoria-etiquetas-paginas-de-archivo/
 */

add_action( 'woocommerce_after_shop_loop_item', 'quitar_botones_anadir_carrito', 1 );

function quitar_botones_anadir_carrito() {
	remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart');

}