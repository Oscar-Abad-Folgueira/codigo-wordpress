<?php
/**
 * @snippet       Condicionales WordPress: Comprobar si es un archivo de plantilla concreta - Template
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://oscarabadfolgueira.com/condicionales-wordpress-comprobar-si-es-un-fichero-de-plantilla
 */
 
if (is_page_template('crear-post-acf.php')){
    echo "Estamos en la plantilla: crear-post-acf.php";
} else {
    echo "no, no es nuestra plantilla. Seguiremos buscando";
}
