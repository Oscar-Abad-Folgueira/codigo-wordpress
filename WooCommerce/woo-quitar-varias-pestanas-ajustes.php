<?php
/**
 * @snippet       WooCoomerce Snippet - Quitar varias pestañas de ajustes de WooCommerce.
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/eliminar-pestanas-en-los-ajustes-de-woocommerce
 */
 
add_filter( 'woocommerce_settings_tabs_array', 'ocultar_petanas_ajustes_woocommerce', 200, 1 );

function ocultar_petanas_ajustes_woocommerce( $tabs_array ) {
	
	unset( $tabs_array['integration'], $tabs_array['email'], $tabs_array['advanced'] ); 

  return $tabs_array;
}