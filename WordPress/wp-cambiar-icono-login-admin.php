<?php
/**
 * @snippet       WordPress Snippet: Cambiar el icono del login de administración
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/wordpress-snippet-cambiar-icono-del-login-administracion/
 */

function oaf_change_login_logo() {
   
   echo '<style type="text/css">
        h1 a { background-image:url(/images/logo.jpg) !important; }
    </style>';
 }
 
 add_action('login_head', 'oaf_change_login_logo');