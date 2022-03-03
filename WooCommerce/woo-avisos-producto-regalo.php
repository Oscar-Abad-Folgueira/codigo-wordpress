<?php
/**
 * @snippet       WooCommerce Snippet: Mostrar avisos en el carrito de WooCommerce para que el cliente compre 3 productos y obtenga producto regalo
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/como-crear-avisos-personalizados-en-woocommerce/
 */
 
add_action( 'template_redirect', 'aviso_compra3' );
   
function aviso_compra3() {

	$producto_regalo_id = 80;   // id del producto regalo
	$producto_regalo_carrito_id = WC()->cart->generate_cart_id( $producto_regalo_id );
	$en_carrito_producto_regalo = WC()->cart->find_product_in_cart( $producto_regalo_carrito_id );

	$productos_carrito = WC()->cart->get_cart_contents_count(); // obtener número de productos en carrito

	/* Comprobar si el producto regalo está en el carrito por si acaso */
	if ( !$en_carrito_producto_regalo ){ // El producto regalo no está en el carrito

		if ( $productos_carrito == 2 ){  // Si hay 2 productos en el carrito muestra mensaje de aviso

			wc_add_notice( 'Compra un producto más para obtener nuestro Regalo', 'notice' );
		}

		if ( $productos_carrito == 3 ){  // Si hay 3 productos en el carrito, añade el producto regalo

			WC()->cart->add_to_cart( $producto_regalo_id );
		}

	} else {  // El producto regalo si está en el carrito

		if ( $productos_carrito <= 3 ){ // Si hay 3 o menos productos en el carrito --> Quitar el producto regalo

			WC()->cart->remove_cart_item( $producto_regalo_carrito_id );
			wc_add_notice( 'Has perdido el Producto de regalo', 'error' );
		}

	}

}