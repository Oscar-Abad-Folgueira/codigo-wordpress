<?php
/**
 * @snippet       WooCommerce Snippet: Añadir un campo de tipo textarea en los ajustes de producto de WooCommerce
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/como-anadir-un-campo-de-tipo-textarea-en-los-ajustes-de-cada-producto-simple
 */
 
add_action( 'woocommerce_product_options_general_product_data', 'oaf_anadir_campo_especificaciones_opciones_generales_producto', 10, 0 );
function oaf_anadir_campo_especificaciones_opciones_generales_producto() {
	woocommerce_wp_textarea_input( array(
			'id'          => 'especificaciones',
			'label'       => __( 'Especificaciones', 'woocommerce' ),
			'desc_tip'    => true,
			'description' => __( 'Campo para introducir las especificaciones del producto', 'woocommerce' ),
	));
}

add_action( 'woocommerce_admin_process_product_object', 'oaf_actualizar_datos_especificaciones', 10, 1 );  
function oaf_actualizar_datos_especificaciones( $product ) {
	if( isset( $_POST['especificaciones'] ) ) {
			$product->update_meta_data( 'especificaciones', esc_html( $_POST['especificaciones'] ) );
	}
}