<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Usuario
 *
 * @author daw2
 */
class Usuario {

    //put your code here
    private $codUsuario;
    private $password;
    private $descUsuario;
    private $numConexiones;
    private $fechaHoraUltimaConexion;
    private $fechaHoraUltimaConexionAnterior;
    private $perfil;
    private $imagenUsuario;

    function __construct($codUsuario, $password, $descUsuario, $numConexiones, $fechaHoraUltimaConexionAnterior,$perfil,$imagenUsuario) {
        $this->codUsuario = $codUsuario;
        $this->password = $password;
        $this->descUsuario = $descUsuario;
        $this->numConexiones = $numConexiones;
        $this->fechaHoraUltimaConexion = new DateTime("now");
        $this->fechaHoraUltimaConexionAnterior = $fechaHoraUltimaConexionAnterior;
        $this->perfil=$perfil;
        $this->imagenUsuario= $this->imagenUsuario;
    }

    public function getCodUsuario() {
        return $this->codUsuario;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getDescUsuario() {
        return $this->descUsuario;
    }

    public function getNumAccesos() {
        return $this->numAccesos;
    }

    public function getFechaHoraUltimaConexion() {
        return $this->fechaHoraUltimaConexion;
    }

    public function getFechaHoraUltimaConexionAnterior() {
        return $this->fechaHoraUltimaConexionAnterior;
    }

    public function getPerfil() {
        return $this->perfil;
    }

    public function setCodUsuario($codUsuario): void {
        $this->codUsuario = $codUsuario;
    }

    public function setPassword($password): void {
        $this->password = $password;
    }

    public function setDescUsuario($descUsuario): void {
        $this->descUsuario = $descUsuario;
    }

    public function setNumAccesos($numAccesos): void {
        $this->numAccesos = $numAccesos;
    }

    public function setFechaHoraUltimaConexion($fechaHoraUltimaConexion): void {
        $this->fechaHoraUltimaConexion = $fechaHoraUltimaConexion;
    }

    public function setFechaHoraUltimaConexionAnterior($fechaHoraUltimaConexionAnterior): void {
        $this->fechaHoraUltimaConexionAnterior = $fechaHoraUltimaConexionAnterior;
    }

    public function setPerfil($perfil): void {
        $this->perfil = $perfil;
    }
    
    public function getNumConexiones() {
        return $this->numConexiones;
    }

    public function getImagenUsuario() {
        return $this->imagenUsuario;
    }

    public function setNumConexiones($numConexiones): void {
        $this->numConexiones = $numConexiones;
    }

    public function setImagenUsuario($imagenUsuario): void {
        $this->imagenUsuario = $imagenUsuario;
    }



}
