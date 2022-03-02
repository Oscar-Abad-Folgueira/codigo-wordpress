<?php
/**
 * @snippet       WooCommerce Snippet: Mostrar la descripción del producto en los detalles del pedido en el admin
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/mostrar-la-descripcion-corta-del-producto-en-los-detalles-del-pedido-en-el-admin-de-woocommerce
 */

 function oaf_woocommerce_before_order_itemmeta( $item_id, $item, $product ) {

	if ( $item->get_type() !== 'line_item' ) return;
	
	// Producto variable 
	if ( $product->get_type() == 'variation' ) {
			// obtener la descripción del producto variable
			$description = $product->get_description();     
	} else {
			// Obtener la descripción corta
			$description = $product->get_short_description();       
	}
	
	// Si está y no está vacío, pintar la descripción
	if ( isset ( $description ) && ! empty( $description ) ) {
			echo $description;
	}
}
add_action( 'woocommerce_before_order_itemmeta', 'oaf_woocommerce_before_order_itemmeta', 10, 3 );