<?php
include_once 'app/views/auth.view.php';
include_once 'app/models/user.model.php';

class AuthContoller {

    private $model;
    private $view;

    public function __construct() {
        $this->model = new UserModel();
        $this->view = new AuthView();
    }

    public function showLogin() {
        $this->view->showFormLogin();
    }

    public function loginUser() {
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        // verifico campos obligatorios
       if (empty($email) || empty($password)) {
            $this->view->showFormLogin("Faltan datos obligatorios");
            die();
        }

        // obtengo el usuario
        $user = $this->model->getByMail($email);

        // si el usuario existe, y las contraseñas coinciden
        if ($user && password_verify($password, $user->password) ) {
            // armo la sesion del usuario
            session_start();
            $_SESSION['ID_USER'] = $user->id;
            $_SESSION['EMAIL_USER'] = $user->mail;
            $_SESSION['ADMIN'] = $user->admin;
            // redirige al home
               header("Location: " . BASE_URL . 'home'); 
            
        } else {
            $this->view->showFormLogin("Wrong Data");
        }
    }

    function createAccount(){
        //Recibo los parametros del post
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password2 = $_POST['confirm-password'];
        $username = $_POST['username'];
        $admin = 0;
        if ($_POST['username']== null){     //Verifico campo usuario completo porque boostrap no lo estaba haciendo
            $this->view->showRegisterForm("Empty username field");
            die();
        }

        if ($password != $password2) {      //Verifico que las contraseñas coincidan
            $this->view->showRegisterForm("Passwords do not match");
            die();
        }

        $users = $this->model->getUsers();     //Obtengo los usuarios
        foreach ($users as $user) {    // Recorro buscando coincidencias
            if ($email == $user->mail) {
                $this->view->showRegisterForm("The email is already in use");
                die();
            }
        }


        if ($_POST['key']!= null){      //Verifico si el usuario ingresó una llave de administrador
            $userKey = $_POST['key'];
            $key = $this->model->getKey();
            if (password_verify($userKey, $key->value)) {
                $admin = 1;
            }
            else {
                $this->view->showRegisterForm("Wrong key");
                die();
            }

        }
        $pw = password_hash($password, PASSWORD_DEFAULT);
        $this->model->newUser($email,$username,$admin,$pw); //Agregado de usuario a la base de datos
        header("Location: " . BASE_URL . 'login');      
    }

    function showRegister() {
      $this->view->showRegisterForm();
    }

    function logout() {
        session_start();
        session_destroy();
        header("Location: " . BASE_URL . 'home');
    }
}