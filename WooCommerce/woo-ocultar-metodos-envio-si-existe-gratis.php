<?php
/**
 * @snippet       WooCoomerce Snippet - Ocultar métodos de envío si existe método de envío gratis.
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/ocultar-metodos-de-envio-si-existe-envio-gratis-en-woocommerce
 */
 
add_filter( 'woocommerce_package_rates', 'oaf_unset_shipping_when_free_is_available_all_zones', 10, 2 );
   
function oaf_unset_shipping_when_free_is_available_all_zones( $rates, $package ) {
      
  $all_free_rates = array();
     
  foreach ( $rates as $rate_id => $rate ) {
    if ( 'free_shipping' === $rate->method_id ) {
       $all_free_rates[ $rate_id ] = $rate;
       break;
    }
  }
     
  if ( empty( $all_free_rates )) {
    return $rates;
  } else {
    return $all_free_rates;
  } 
 
}