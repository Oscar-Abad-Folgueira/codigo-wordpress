<?php
/**
 * @snippet       WordPress Snippet: Cambiar cambiar url logo login
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/wordpress-snippet-cambiar-la-url-del-logo-login/
 */

add_filter( 'login_headerurl', 'oaf_my_login_logo_url' );

function oaf_my_login_logo_url ($url) {
  
	return 'http://www.oscarabadfolgueira.com';
}