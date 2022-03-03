<?php
/**
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/convertir-el-campo-de-codigo-postal-de-woocommerce-en-un-select-o-lista-deplegable/
 * @description   Convertir el campo de código postal del checkout de WooCommerce en un campo tipo select con los códigos postable válidos.
 */
 
add_filter( 'woocommerce_default_address_fields' , 'customize_postcode_fields' );
function customize_postcode_fields( $adresses_fields ) {

		$adresses_fields['postcode']['type'] = 'select';
		$adresses_fields['postcode']['validate'] = false;  // desactivar la validación del código postal
		$adresses_fields['postcode']['required'] = true;
    $adresses_fields['postcode']['options'] = array(
        ''         => __('Selecciona tu código postal', 'woocommerce'),
        'option_1' => '01470',  // lista de códigos postales
        'option_2' => '01473',  // Añadir los que necesitemos
        'option_3' => '01476'
    );

    return $adresses_fields;
}