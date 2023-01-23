<?php
/**
 * @author Ricardo Santiago Tomé RicardoSantom en Github <https://github.com/RicardoSantom>
 * @version 1.0
 * @since 12/01/2023
 * @ÚLtima actualización 20/01/2023
 * Controlador inicio público
 */
//Si se pulsa iniciar sesión, va a la vista de login
if(isset($_REQUEST['iniciarsesion'])){
    //Si se ha pulsado sobre iniciar sesión, guarda en valor de la página en cuso en la superglobal $_SESSION
    $_SESSION['paginaAnterior']=$_SESSION['paginaEnCurso'];
    //Cambia la página en curso a login
    $_SESSION['paginaEnCurso']='login';
    header('Location: index.php');
    exit;
}
require_once $aVistas['layout'];
