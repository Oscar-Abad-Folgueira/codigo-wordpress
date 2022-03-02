<?php
/**
 * @snippet       WooCommerce Snippet: Añadir página al menú de administración de WooCommerce
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/anadir-una-nueva-pagina-al-menu-de-administracion-de-woocommerce
 */

add_action( 'admin_menu', 'oaf_registrar_pagina_mi_woocommerce_admin', 9999 );
 
function oaf_registrar_pagina_mi_woocommerce_admin() {
   add_submenu_page( 'woocommerce', 'Mi WooCommerce', 'Mi WooCommerce', 'edit_products', 'mi-woocommerce', 'oaf_contenido_pagina_mi_woocommerce_admin', 9999 );
}
 
function oaf_contenido_pagina_mi_woocommerce_admin() {
   echo '<div class="wrap"><h1 class="">Mi Página de Ajustes de WooCommerce</h1>';
   echo '<br /><p>Aquí podemos añadir todo lo que necesitemos sin prisa pero sin pausa.</p>';
   echo '</div>';
}