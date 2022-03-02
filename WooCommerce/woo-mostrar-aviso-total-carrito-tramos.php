<?php
/**
 * @snippet       WooCommerce Snippet: Mostrar aviso en carrito de WooCommerce dependiendo del total y por tramos
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/
 */
 
add_action( 'woocommerce_before_cart', 'oaf_carrito_total_por_tramos' );
function oaf_carrito_total_por_tramos() {

    // Obtener el total del carrito
    $total = WC()->cart->total;

    // Establecer el tramo
    $tramo = 30;

    // calculate the number of meals
    $donaciones = floor( $total / $tramo );

    // Mostrar mensaje cuando el total es menor que el tramo
    if ( $donaciones < 1 ) {

        wc_print_notice( 'Por cada 30€ que gastes donaremos 5€ a causas venéficas', 'notice' );
        return;
    }

    if ( $donaciones >= 1 ) {

        $cantidad_donaciones = $donaciones * 5;
				// Mostrar el mensaje con la cantidad donada
				wc_print_notice( sprintf( 'Muchas gracias, con tu compra donaremos %s€ a causas benéficas', $cantidad_donaciones ), 'notice' );
    }
}