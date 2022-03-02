<?php
/**
 * @snippet       WooCoomerce Snippet - Eliminar opción de zoom en imágenes de producto
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/eliminar-opcion-de-zoom-en-las-imagenes-de-productos-de-woocommerce
 */
 
add_action( 'after_setup_theme', 'oaf_zoom_producto_woocommerce' );

function oaf_zoom_producto_woocommerce() {
	remove_theme_support( 'wc-product-gallery-zoom' );
}