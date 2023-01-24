<?php

/**
 * Description Este fichero es un controlador sobre la vista homónima cLogin.php
 * @author Ricardo Santiago Tomé <https://github.com/RicardoSantom>
 * @author David Aparicio Sir <https://github.com/davidas02/201DWESLoginLogoff>
 * @since 14/01/2023
 * @version 0.1
 * 
 */
//Inclusión librería de validación
require_once 'core/validacionFormularios.php';
if (isset($_REQUEST['cancelar'])) {
    //Si se ha pulsado el botón cancelar, se guarda la página en curso como página anterior
    $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior'];
    $_SESSION['paginaEnCurso'] = 'iniciopublico';
    //Estableciendo index.php como página principal de acceso
    header('Location: index.php');
    exit;
}
if (isset($_REQUEST['login'])) {
    //Si se ha pulsado el botón Iniciar Sesion
    //Inicializo array para guardar valores de dos input homónimos a las claves
    //de este array asociativo
    $aErrores = [
        'usuario' => null,
        'password' => null
    ];
    //Booleano a verdadero, tornará falso si hay algún error en la comprobación 
    //de los valores recogidos de los inputs.
    $entradaOk = true;
    //Objeto inicializado a null, en él se guardarán los valores de los input si resultan ser correctos
    $oLogin = null;
    //Comprobación de los valores recogidos en los dos input
    $aErrores['usuario'] = validacionFormularios::comprobarAlfabetico($_REQUEST['usuario'], 8, 4, OBLIGATORIO);
    $aErrores['password'] = validacionFormularios::validarPassword($_REQUEST['password'], 8, 4, 1, OBLIGATORIO);
    //Recorrido de este array, si hay algún error pondrá el booleano $entradaOk a falso.
    foreach ($aErrores as $claveError => $mensajeError) {
        if ($mensajeError != null) {
            $entradaOk = false;
        }
    }
    //Si en el bucle anterior no se han detectado errores, el booleano permanecerá a su valor original,
    //true, y a continuación evaluo si efectivamente este booleano sigue siendo true.
    if ($entradaOk) {
        //Comprobado ya el formato correcto de los dos input, se pasan como parámetro a la función validarUsuario        
        $oLogin = UsuarioPDO::validarUsuario($_REQUEST['usuario'], $_REQUEST['password']);
        
        //Si no se ha podido validar el usuario, se pone el booleano a false
        if (is_null($oLogin)) {
            $entradaOk = false;
        }
    }
    if ($entradaOk) {
        UsuarioPDO::registrarUltimaConexion($oLogin);
        $_SESSION['user208DWESLoginLogoff'] = $oLogin;
        $_SESSION['paginaEnCurso'] = 'inicioprivado';
        header('Location: index.php');
        exit;
    }
}
require_once $aVistas['layout'];
