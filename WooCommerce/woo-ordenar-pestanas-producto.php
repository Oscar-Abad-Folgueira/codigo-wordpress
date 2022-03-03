<?php
/**
 * @snippet       WooCommerce Snippet: Ordenar pestañas de producto de WooCommerce
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/woocommerce-snippet-ordenar-las-pestanas-en-la-pagina-de-producto/
 */

add_filter( 'woocommerce_product_tabs', 'oaf_wc_change_tabs_order', 20 );

function oaf_wc_change_tabs_order( $tabs ) {
    $tabs['reviews']['priority'] = 5;
    $tabs['description']['priority'] = 10;
    
    return $tabs;
}