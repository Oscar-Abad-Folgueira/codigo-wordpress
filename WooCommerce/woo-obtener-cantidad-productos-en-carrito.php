<?php
/**
 * @snippet       WooCommerce Snippet: Obtener el número de prodcutos que hay en el carrito de WooCommerce
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/obtener-el-numero-de-productos-que-hay-en-el-carrito-de-woocommerce/
 */
 
echo "Total productos: " . WC()->cart->get_cart_contents_count();