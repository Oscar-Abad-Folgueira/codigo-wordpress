<?php
/**
 * @snippet       WooCoomerce Snippet - Ocultar pestañas de los ajustes de WooCommerce por rol de usuario
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/eliminar-pestanas-en-los-ajustes-de-woocommerce
 */
 
add_filter( 'woocommerce_settings_tabs_array', 'ocultar_petanas_ajustes_woocommerce', 200, 1 );

function ocultar_petanas_ajustes_woocommerce( $tabs_array ) {
	
	$current_user = wp_get_current_user();
	
	if ( in_array( 'administrator', $current_user->roles )){
		unset( $tabs_array['integration'], $tabs_array['email'], $tabs_array['advanced'] );
	}

  return $tabs_array;
}