<?php
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
if (isset($_REQUEST['volverPrograma'])) {
    $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior'];
    header("Location: index.php");
}
$_SESSION['paginaAnterior']='inicioprivado';
require_once $aVistas['layout'];