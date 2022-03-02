<?php
/**
 * @snippet       WooCoomerce Snippet - Mostrar número de unidades vendidas de un producto.
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/mostrar-el-numero-de-unidades-vendidas-de-un-producto-en-woocommerce/
 */
 
 add_action( 'woocommerce_single_product_summary', 'oaf_unidades_vendidas_por_producto', 11 );
  
 function oaf_unidades_vendidas_por_producto() {
		global $product;
		$unidades_vendidas = $product->get_total_sales();
		if ( $unidades_vendidas ) {
			echo '<p class="unidades-vendidas-si">' . sprintf( __( 'Unidades vendidas: %s', 'woocommerce' ), $unidades_vendidas ) . '</p>';
		} else {
			echo '<p class="unidades-vendidas-no">' . __( 'Serás la primera persona que compre este producto. ¡Anímate!</p>');
		}
 }