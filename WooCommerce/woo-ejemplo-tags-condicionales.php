<?php
/**
 * @snippet       WooCommerce Snippet: Ejemplo de etiquetas condicionales de WooCommerce
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/etiquetas-condicionales-en-woocommerce/
 */
 
if ( is_home ){
  echo "Bienvendio/a a mi tienda!";
} elseif ( is_product_category ( 'zapatos' )) {
    echo "Encuentra los mejores zapatos del mercado";
} elseif ( is_product() ) {
    echo "Este producto es el mejor que encontrarás";
} elseif ( is_cart() ) {
    echo "puedes añadir más productos o pagar";
} elseif ( is_checkout() ) {
    echo "Estás a un solo click de llevarte lo mejor de lo mejor";
}