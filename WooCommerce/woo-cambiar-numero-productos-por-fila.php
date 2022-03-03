<?php
/**
 * @snippet       WooCommerce Snippet: Cambiar el número de productos por línea en WooCommerce
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/cambiar-el-numero-de-productos-por-fila-en-woocommerce/
 */
 
add_filter('loop_shop_columns', 'loop_columns', 999);
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 6; // 6 productos por fila
	}
}