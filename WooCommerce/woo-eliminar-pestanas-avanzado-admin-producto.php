<?php
/**
 * @snippet       WooCommerce Snippet: Eliminar pestaña avanzado de los datos de producto de WooCommerce en el admin
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/como-eliminar-pestanas-en-los-ajustes-de-producto-de-woocommerce/
 */

function remove_product_admin_advanced_data_tab($tabs){

	unset($tabs['advanced']);  // Quitar pestaña Avanzado

	return($tabs);

}

add_filter('woocommerce_product_data_tabs', 'remove_product_admin_advanced_data_tab', 10, 1);