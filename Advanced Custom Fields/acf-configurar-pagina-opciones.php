<?php
/**
 * @snippet       Advanced Custom Fields: Opciones básicas para las páginas de opciones.
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://oscarabadfolgueira.com/como-crear-una-pagina-de-opciones-en-wordpress-con-advaced-custom-fields-de-basico-a-avanzado
 */

add_action('acf/init', 'oaf_pagina_opciones');

function oaf_pagina_opciones() {

	// Comprobar si existe la función acf_add_options_page
	if( function_exists('acf_add_options_page') ) {

			$option_page = acf_add_options_page(array(
					'page_title'    	=> 'Datos Generales',
					'menu_title'    	=> 'Datos Generales',
					'menu_slug'     	=> 'datos-generales',
					'capability'    	=> 'edit_posts',
					'position' 		=> '999',
					'icon_url' 		=> 'dashicons-superhero-alt',
					'update_button' 	=> 'Actualizar',
					'updated_message' 	=> 'Las opciones se han guardado',
					'redirect'      	=> false
			));
	}
}