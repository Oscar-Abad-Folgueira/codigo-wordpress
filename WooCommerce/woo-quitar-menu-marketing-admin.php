<?php
/**
 * @snippet       Quitar la opción Márketing de WooCommerce del menú de administración de WordPress
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/quitar-la-opcion-de-marketing-de-woocommerce-del-menu-de-administracion-de-wordpress/
 */
 
add_filter('woocommerce_marketing_menu_items', 'ocultar_menu_marketing_admin');

function ocultar_menu_marketing_admin($marketing_pages){
    return array();
}