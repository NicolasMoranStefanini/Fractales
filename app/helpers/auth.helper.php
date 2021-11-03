<?php

class AuthHelper {

    function __construct() {
    }

    /*
    * Barrera de seguridad para usuario
    */
    function checkLogged(){
        session_start(); 
        if (!isset($_SESSION['ID_USER'])) {  
            header("Location: " . BASE_URL . "login");
            die(); 
        }
    }

    /*
    * Barrera de seguridad para usuario administrador
    */
    function checkAdmin() {
        if (!isset($_SESSION['ID_USER'])) {
            header("Location: " . BASE_URL . "login");
            die(); 
        }
        if ($_SESSION['ADMIN'] == '0'){
            header("Location: " . BASE_URL . "login");
            die(); 
        }
    }   
}