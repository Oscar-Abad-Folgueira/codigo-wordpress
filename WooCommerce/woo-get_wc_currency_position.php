<?php
/**
 * @snippet       WooCoomerce Snippet - Obtener la posición de la moneda establecida en los ajustes de WooCommerce.
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/
 */

// Obtenemos mediante la opción 'woocommerce_currency_pos'
$currency_position = get_option( 'woocommerce_currency_pos' );

// Mostramos para verlo (right o left)
echo $currency_position;