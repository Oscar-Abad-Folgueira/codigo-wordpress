<?php
/**
 * @snippet       WooCommerce Snippet: Quitar el campo de Código Postal del formulario del checkout
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/
 */

add_filter( 'woocommerce_checkout_fields' , 'oaf_quitar_codigo_postal_checkout' );

function oaf_quitar_codigo_postal_checkout( $campos_checkout ) {

	unset($campos_checkout['billing']['billing_postcode']);
	return $campos_checkout;
}