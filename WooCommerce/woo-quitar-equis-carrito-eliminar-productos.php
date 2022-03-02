<?php
/**
 * @snippet       WooCoomerce Snippet - Quitar equis de eliminar productos en el carrito
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/quitar-las-equis-de-eliminar-productos-del-carrito-de-woocommerce
 */

add_filter('woocommerce_cart_item_remove_link','remove_cart_icon',10,2);

function remove_cart_icon($plink,$link){
		return '';
}