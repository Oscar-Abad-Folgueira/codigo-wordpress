<?php
/**
 * @snippet       Cambiar el título de las pestañas de producto de WooCommerce
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/woocommerce-snippet-cambiar-el-titulo-de-las-pestanas-de-producto/
 */

add_filter( 'woocommerce_product_tabs', 'oaf_wc_change_product_tabs_titles', 20);
function oaf_wc_change_product_tabs_titles($tabs) {

 $tabs['description']['title'] = 'Información';
 $tabs['reviews']['title'] = 'Valoraciones';

 return $tabs;
}