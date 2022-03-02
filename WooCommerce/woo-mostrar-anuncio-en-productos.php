<?php
/**
 * @snippet       WooCommerce Snippet: Mostrar anuncio en la parte superior de las páginas de producto individual
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/anadir-contenido-en-la-cabecera-de-los-productos-o-en-productos-en-concreto
 */
 
add_action( 'wp_head', 'oaf_mostrar_anuncio' );

function oaf_mostrar_anuncio() {

    if ( is_product() ) {
			
	echo '<h2 class="anuncio-estrella">ESTE ES NUESTRO PRODUCTO ESTRELLA!!!</h2>';
    }
}