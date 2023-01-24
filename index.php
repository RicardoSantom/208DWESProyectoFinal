<?php
/**
 * @author Ricardo Santiago Tomé <https://github.com/RicardoSantom>
 * @since 10/01/2023
 * @version 0.1
 * Página de entrada a la aplicación 208DWESLoginLogoff. Incluye ficheros de configuración
 * de la aplicación y de la base de datos a través de sus correspondientes 'require'.
 * Inica la sesión y si la variable superglobal $_SESSION no tiene un valor(no hay una sesión iniciada),
 * guarda en esta el fichero correspondiente a la clave 'iniciopublico' como página en curso en $_SESSION.
 * Finalmente carga a través de otro 'require' el array de controladores con el valor de clave que
 * está guardado en la sesión.
 */
//Inclusión de fichero configuración aplicación con arrays de controladores y vistas.
require_once './conf/confApp.php';
//Inicio de la sesión
session_start();
ob_start();
//Condicional. Si no hay valor guardado en $_SESSION, le da el valor de página 
//en curso =inicio publico
if (!isset($_SESSION['paginaEnCurso'])) {
    $_SESSION['paginaEnCurso'] = 'iniciopublico';
}
//Inclusión de array de controladores con clave igual al valor de lo guardado
//en la sesión.
require_once $aControladores[$_SESSION['paginaEnCurso']];