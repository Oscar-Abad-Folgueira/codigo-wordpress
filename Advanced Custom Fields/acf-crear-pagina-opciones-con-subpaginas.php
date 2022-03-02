<?php
/**
 * @snippet       Advanced Custom Fields: Crear página de opciones con sub-páginas.
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://oscarabadfolgueira.com/como-crear-una-pagina-de-opciones-en-wordpress-con-advaced-custom-fields-de-basico-a-avanzado
 */
 
add_action('acf/init', 'oaf_pagina_opciones');

function oaf_pagina_opciones() {

	// Comprobar si existe la función acf_add_options_page
	if( function_exists('acf_add_options_page') ) {

			acf_add_options_page(array(
				'page_title'    	=> 'Datos Generales',
				'menu_title'    	=> 'Datos Generales',
				'menu_slug'     	=> 'datos-generales',
				'capability'    	=> 'edit_posts',
				'position' 		=> '999',
				'icon_url' 		=> 'dashicons-superhero-alt',
				'update_button' 	=> 'Actualizar',
				'updated_message' 	=> 'Las opciones se han guardado',
				'redirect'      	=> true
			));
			
			acf_add_options_sub_page(array(
				'page_title'  => 'Información',
				'menu_title'  => 'Datos empresa',
				'menu_slug'   => 'datos-empresa',
				'parent_slug' => 'datos-generales'
			));
			
			acf_add_options_sub_page(array(
				'page_title'  => 'Clientes',
				'menu_title'  => 'Clientes',
				'menu_slug'   => 'clientes-empresa',
				'parent_slug' => 'datos-generales'
			));
	}
}