<?php
require_once('libs/smarty/libs/Smarty.class.php');

class AuthView {

    private $smarty; 

    function __construct() {
        $this->smarty = new Smarty();
        $this->smarty->assign('title', "myStock");
    }

    function showFormLogin($error = null) {
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/formLogin.tpl');
    }

    function showRegisterForm($error = null) {
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/register.tpl');
    }

    function crudUsers($users) { 
        $this->smarty->assign('users', $users);
        $this->smarty->display('templates/crudUsers.tpl');
    }

    function showError($msg) {
        $this->smarty->assign('msg', $msg);
        $this->smarty->display('templates/error.tpl');
    }
}