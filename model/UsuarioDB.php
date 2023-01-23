<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPInterface.php to edit this template
 */

/**
 *
 * @author daw2
 */
interface UsuarioDB {
    //put your code here
    public static function validarUsuario($codUsuario,$password);
    public static function registrarUltimaConexion($oUsuarioValido);
}
