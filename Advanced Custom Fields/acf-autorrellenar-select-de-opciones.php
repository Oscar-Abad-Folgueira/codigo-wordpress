<?php
/**
 * @snippet       Cómo autorellenar un campo select de Advanced Custom Fields con datos de una página de opciones 
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://oscarabadfolgueira.com/como-autorrellenar-un-campo-select-de-advanced-custom-fields-con-datos-de-una-pagina-de-opciones
 */

// Función para recoger los datos del textarea de la página de opciones y autorrellenar el select
function oaf_acf_cargar_lista_opciones( $field ) {
    
	// borramos las opciones del select por si hay algo
	$field['choices'] = array();
	
	// guardamos en $opciones el campo textarea
	$opciones = get_field('lista_de_opciones', 'option', false);

	// cada línea en un campo del array
	$opciones = explode("\n", $opciones);
	
	// Elminiar los espacios en blanco
	$opciones = array_map('trim', $opciones);
	// recorrer el array para y añadir al campo 'opciones'
	if( is_array($opciones) ) {

		foreach( $opciones as $opcion ) {		
				$field['choices'][ $opcion ] = $opcion;					
		}	
	}

	return $field;
}

add_filter('acf/load_field/name=seleccionar_opcion', 'oaf_acf_cargar_lista_opciones');