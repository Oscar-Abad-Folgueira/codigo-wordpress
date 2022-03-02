<?php
/**
 * @snippet       WooCommerce Snippet: Excluir categorías de la lista de categorías
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com//woocommerce-snippet-excluir-categorias-la-lista-categorias/
 */

add_filter( 'woocommerce_product_categories_widget_dropdown_args', 'oaf_wc_exclude_categories_from_list_widget' );
add_filter( 'woocommerce_product_categories_widget_args', 'oaf_wc_exclude_categories_from_list_widget' );

function oaf_wc_exclude_categories_from_list_widget( $cat_args ) {
  
	$cat_args['exclude'] = array('14','17'); 
	return $cat_args;
}