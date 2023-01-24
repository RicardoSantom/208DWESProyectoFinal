<?php

/**
 * Description Este fichero es un controlador sobre la vista homónima cInicioPrivado.php
 * @author Ricardo Santiago Tomé <https://github.com/RicardoSantom>
 * @since 14/01/2023
 * @version 0.1
 * 
 */
//Si se selecciona cerrar sesión, destruye la sesión y vuelve a la página de login.
if (isset($_REQUEST['salir'])) {
    $_SESSION['paginaEnCurso'] = 'iniciopublico';
    $_SESSION['user208DWESLoginLogoff'] = null;
    session_destroy();
    header('Location:index.php');
    exit;
}
//Si se selecciona detalle, navega hasta esa vista, la guarda como página en curso en la sesión y
//establece inicioprivado como página anterior.
if (isset($_REQUEST['detalle'])) {
    $_SESSION['paginaEnCurso'] = 'detalle';
    $_SESSION['paginaAnterior'] = 'inicioprivado';
    header("Location: index.php");
}
require_once $aVistas['layout'];