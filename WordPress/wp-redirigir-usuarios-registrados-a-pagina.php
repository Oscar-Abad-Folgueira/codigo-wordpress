<?php
/**
 * @snippet       WordPress Snippet: Redirigir a los usuarios registrados a una página específica
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/wordpress-snippet-redirigir-a-nuevos-usuarios-registrados-a-una-pagina-especifica/
 */

function oaf_wp_redirect_new_registrations(){
  return home_url( '/regalito-para-los-nuevos/' );
}

add_filter( 'registration_redirect', 'oaf_wp_redirect_new_registrations' );