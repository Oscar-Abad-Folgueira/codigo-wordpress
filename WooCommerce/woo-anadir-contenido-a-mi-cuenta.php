<?php
/**
 * @hook          woocommerce_account_content
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/hooks/woocommerce_account_content/
 * @description   WooCommerce Snippet: Añadir contenido a "Mi cuenta" en WooCommerce.
 */
 
// Definir la función que realizará las acciones que queramos que se lleven a cabo
function oaf_anadir_woocommerce_account_content() {
  
	echo "<strong>Texto de ejemplo para ver dónde se muestra dentro de 'Mi cuenta'</strong>";
  // incluir más código....
}

// añadir la acción con la función definida anteriormente
add_action( 'woocommerce_account_content', 'oaf_anadir_woocommerce_account_content', 10, 0 );


// Quitar el contenido añadido anteriormente
remove_action( 'woocommerce_account_content', 'oaf_anadir_woocommerce_account_content', 10, 0 );

