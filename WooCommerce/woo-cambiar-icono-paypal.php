<?php
/**
 * @snippet       WooCommerce Snippet: Cambiar icono de paypal
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/woocommerce-snippet-cambiar-icono-paypal/
 */

function oaf_change_paypal_icon_image() {
     
     return "http://www.oscarabadfolgueira.com/wp-content/xxxxx/icono-paypal-tarjetas.png";
}

add_filter( 'woocommerce_paypal_icon', 'oaf_change_paypal_icon_image' );