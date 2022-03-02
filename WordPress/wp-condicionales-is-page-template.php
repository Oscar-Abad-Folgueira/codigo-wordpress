<?php
/**
 * @snippet       Condicionales WordPress: Comprobar si es un archivo de plantilla - Template
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://oscarabadfolgueira.com/condicionales-wordpress-comprobar-si-es-un-fichero-de-plantilla
 */
 
if ( is_page_template() ){
    echo "Estamos en una template";
}