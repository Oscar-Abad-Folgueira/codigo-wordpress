<?php
/**
 * @snippet       WooCoomerce Snippet - Quitar una pestaña de ajustes de WooCommerce (Integración).
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/eliminar-pestanas-en-los-ajustes-de-woocommerce
 */
 
add_filter( 'woocommerce_settings_tabs_array', 'ocultar_petanas_ajustes_woocommerce', 200, 1 );

function ocultar_petanas_ajustes_woocommerce( $tabs_array ) {
	
	unset( $tabs_array['integration'] ); 
  return $tabs_array;
}