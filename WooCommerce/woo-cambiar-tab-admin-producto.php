<?php
/**
 * @snippet       WooCommerce Snippet: Cambiar nombre pestaña avanzado en datos de producto de WooCommerce
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/como-renombrar-las-pestanas-de-los-datos-de-productos-en-la-edicion-de-productos-de-woocommerce/
 */

function change_product_admin_advanced_data_tab($tabs){

	$tabs['advanced']['label'] = "Experto";
	return($tabs);
}

add_filter('woocommerce_product_data_tabs', 'change_product_admin_advanced_data_tab', 10, 1);