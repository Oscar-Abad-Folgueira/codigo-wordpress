<?php
/**
 * @snippet       WooCommerce Snippet: Crear nuevo filtro en el admin de productos de WooCommerce
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/crear-un-nuevo-filtro-para-los-productos-en-el-admin-de-woocommerce
 */
 
add_filter( 'woocommerce_product_filters', 'oaf_filtro_etiquetas_producto_admin' );
 
function oaf_filtro_etiquetas_producto_admin( $resultado ) {
   
  global $wp_query;
 
  $output .= wc_product_dropdown_categories( array(
   'show_option_none' => 'Elige una etiqueta',
   'taxonomy' => 'product_tag',
   'name' => 'product_tag',
   'selected' => isset( $wp_query->query_vars['product_tag'] ) ? $wp_query->query_vars['product_tag'] : '',
  ) );
   
  return $resultado;
}