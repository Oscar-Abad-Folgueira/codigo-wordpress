<?php
/**
 * @snippet       WooCommerce Snippet: Establecer el país por defecto en el campo país del formulario "Detalles de facturación" del checkout de WooCommerce.
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/establecer-un-pais-por-defecto-en-el-formulario-del-checkout-de-woocommerce/
 */

add_filter( 'default_checkout_billing_country', 'change_default_checkout_country' );

function change_default_checkout_country() {
    return 'FI';  // cambiar código por otro para otro país
}