<?php
/**
 * @snippet       WooCoomerce Snippet - Ocultar precios a usuarios no registrados
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/ocultar-precios-a-usuarios-no-registrados-en-woocommerce
 */

add_filter( 'woocommerce_variable_sale_price_html', 'update_price_html', 10, 2 );
add_filter( 'woocommerce_variable_price_html', 'update_price_html', 10, 2 );
add_filter( 'woocommerce_get_price_html','update_price_html', 999, 2 );

function update_price_html( $html, $product ) {

    if(!is_user_logged_in()) {  // Si el usuario no está logueado
        add_filter( 'woocommerce_is_purchasable', '__return_false');
        $html = "Necesitas estar registrado para ver los precios";
        return $html;
    } else {
        return $html;
    }
}