<?php
/**
 * @snippet       WooCoomerce Snippet - Habilitar gestión de inventario en todas las variaciones y establecer la cantidad de stock en WooCommerce.
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/habilitar-gestion-de-inventario-en-todas-las-variaciones-y-establecer-la-cantidad-de-stock-en-woocommerce
 */
 
add_action( 'admin_footer', 'custom_admin_product_variations_js' );

function custom_admin_product_variations_js() {
    global $post_type;

    if ( 'product' === $post_type ) :
    ?><script type='text/javascript'>
    jQuery( function($) {
        $('#variable_product_options').on( 'change', function(){
            $('input.variable_manage_stock').each( function(){
                if( ! $(this).is(':checked') ){
                    $(this).attr('checked', 'checked').closest('div').find('.wc_input_stock').val(1); // cambia 1 por la cantidad que quieras
                }
            });
        });
    });
    </script><?php
    endif;
}