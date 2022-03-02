<?php
/**
 * @snippet       WooCommerce Snippet: Desactivar verificación código postal checkout (campo opcional)
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/
 */
 
add_filter( 'woocommerce_default_address_fields' , 'oaf_codigo_postal_checkout_opcional' );

function oaf_codigo_postal_checkout_opcional( $campos_checkout ) {

	$campos_checkout['postcode']['required'] = false;
	return $campos_checkout;
}