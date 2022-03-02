<?php
/**
 * @snippet       WooCoomerce Snippet - Ocultar el mensaje "El carrito está vacío" en WooCommerce
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/ocultar-el-aviso-el-carrito-esta-vacio-en-la-pagina-del-carrito-de-woocommerce
 */

remove_action( 'woocommerce_cart_is_empty', 'wc_empty_cart_message', 10 );