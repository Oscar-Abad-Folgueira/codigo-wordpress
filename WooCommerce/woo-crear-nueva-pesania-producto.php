<?php
/**
 * @snippet       WooCommerce Snippet: Crear una nueva pentaña en la página de producto
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/crear-una-nueva-pestana-en-la-pagina-de-producto-de-woocommerce/
 */
 
add_filter( 'woocommerce_product_tabs', 'oaf_nueva_petania_producto' );

function oaf_nueva_petania_producto( $tabs ) {
	
	$tabs['test_tab'] = array(
		'title' 	=> __( 'Nueva Pestaña', 'woocommerce' ),
		'priority' 	=> 40,
		'callback' 	=> 'oaf_contenido_nueva_pestania_producto'
	);

	return $tabs;
}

function oaf_contenido_nueva_pestania_producto() {

	echo '<h2>Nueva Pestaña</h2>';
	echo '<p>Contenido de la nueva pestaña de producto.</p>';
	echo '<p>Más contenido.... </p>';
}