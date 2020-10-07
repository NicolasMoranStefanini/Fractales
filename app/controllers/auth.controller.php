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
        $user = $this->model->getByEmail($email);

        // si el usuario existe, y las contraseñas coinciden
        if ($user && password_verify($password, $user->password)) {
            
            // armo la sesion del usuario
            session_start();
            $_SESSION['ID_USER'] = $user->id;
            $_SESSION['EMAIL_USER'] = $user->email;

            // redirigimos al listado
            header("Location: " . BASE_URL . 'home'); 
            
        } else {
            $this->view->showFormLogin("Credenciales inválidas");
        }
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