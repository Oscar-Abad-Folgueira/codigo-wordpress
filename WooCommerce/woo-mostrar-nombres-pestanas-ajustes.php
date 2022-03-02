<?php
/**
 * @snippet       WooCoomerce Snippet - Mostrar los nombres de las pestañas de ajustes de WooCommerce
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/eliminar-pestanas-en-los-ajustes-de-woocommerce
 */
 
add_filter( 'woocommerce_settings_tabs_array', 'mostrar_pestanas_ajustes_woocommerce', 990, 1 );
function mostrar_pestanas_ajustes_woocommerce( $tabs_array ) {

		echo '<pre>';
		print_r( $tabs_array );
		echo '</pre>';
 
  return $tabs_array;
}