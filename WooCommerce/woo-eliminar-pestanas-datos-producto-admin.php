<?php
/**
 * @snippet       WooCommerce: Eliminar pestañas de los datos de producto de WooCommerce en el admin
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/como-eliminar-pestanas-en-los-ajustes-de-producto-de-woocommerce/
 */

function remove_product_admin_data_tabs($tabs){

	unset($tabs['general']);  // Quitar pestaña General

	unset($tabs['inventory']);  // Quitar pestaña Inventario

	unset($tabs['shipping']);  // Quitar pestaña Envío

	unset($tabs['linked_product']);  // Quitar pestaña Productos relacionados

	unset($tabs['attribute']);  // Quitar pestaña Atributos

	unset($tabs['advanced']);  // Quitar pestaña Avanzado

	return($tabs);

}

add_filter('woocommerce_product_data_tabs', 'remove_product_admin_data_tabs', 10, 1);