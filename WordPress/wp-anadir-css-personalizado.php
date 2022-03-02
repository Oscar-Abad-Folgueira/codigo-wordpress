<?php
/**
 * @snippet       WordPress Snippet: añadir css personalizado al área de administracion de WordPress
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/aplicar-css-personalizado-area-administracion-wordpress/
 */
 
// utilizamos 'admin_enqueue_script' para ejecutar la función
add_action( 'admin_enqueue_scripts', 'oaf_enqueue_custom_admin_styles' );

// Función que registra el fichero css que hemos creado para tal efecto.
function oaf_enqueue_custom_admin_styles() {
        wp_register_style( 'oaf_admin_custom_styles', get_stylesheet_directory_uri() . '/css/oaf_admin_custom_styles.css', false, '1.0.0' );
        wp_enqueue_style( 'oaf_admin_custom_styles' );
}