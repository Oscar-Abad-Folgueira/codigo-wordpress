<?php
/**
 * @snippet       WooCoomerce Snippet - Habilitar opción de lightbox en imágenes de producto.
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/xxxxx
 */
 
add_action( 'after_setup_theme', 'oaf_lightbox_producto_woocommerce' );

function oaf_lightbox_producto_woocommerce() {

	add_theme_support( 'wc-product-gallery-lightbox' );
}