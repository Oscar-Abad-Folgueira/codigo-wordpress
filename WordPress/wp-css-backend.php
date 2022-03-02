<?php
/**
 * @snippet       Encolar archivo css para el backend de WordPress - Admin
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://oscarabadfolgueira.com/anadir-css-en-el-backend-de-wordpress/
 */
 
// Encolar estilos para el back - Admin
function oaf_admin_style() {

  wp_enqueue_style('admin-styles', get_stylesheet_directory_uri().'/assets/css/admin.css');  
}

add_action('admin_enqueue_scripts', 'oaf_admin_style');