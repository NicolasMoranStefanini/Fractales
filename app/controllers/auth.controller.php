<?php
include_once 'app/views/auth.view.php';
include_once 'app/models/user.model.php';
include_once 'app/helpers/auth.helper.php';

class AuthController {

    private $model;
    private $view;
    private $authHelper;

    public function __construct() {
        $this->model = new UserModel();
        $this->view = new AuthView();
        $this->authHelper = new AuthHelper();
        session_start(); 
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
            $_SESSION['NAME'] = $user->nombre;
            // redirige al home
               header("Location: " . BASE_URL ); 
            
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
        //Verifico campo usuario completo porque boostrap no lo estaba haciendo
        if ($_POST['username']== null){    
            $this->view->showRegisterForm("Empty username field");
            die();
        }

        //Verifico que las contraseñas coincidan
        if ($password != $password2) {      
            $this->view->showRegisterForm("Passwords do not match");
            die();
        }

        //Obtengo los usuarios
        $users = $this->model->getUsers();     

        // Recorro buscando coincidencias
        foreach ($users as $user) {   
            if ($email == $user->mail) {
                $this->view->showRegisterForm("The email is already in use");
                die();
            }
        }

        $pw = password_hash($password, PASSWORD_DEFAULT);
        
        //Agregado de usuario a la base de datos
        $this->model->newUser($email,$username,$admin,$pw); 
      
        //Inicio la sesion
        $user = $this->model->getByMail($email);
        if ($username && password_verify($password, $user->password) ) {
            // armo la sesion del usuario
            session_start();
            $_SESSION['ID_USER'] = $user->id;
            $_SESSION['EMAIL_USER'] = $user->mail;
            $_SESSION['ADMIN'] = $user->admin;
            $_SESSION['NAME'] = $user->nombre;
        }
        //Redirijo al home
        header("Location: " . BASE_URL . 'crudProducts');      
    }

    function showRegister() {
        $this->authHelper->checkAdmin();
        $this->view->showRegisterForm();
    }

    function logout() {
        session_start();
        session_destroy();
        header("Location: " . BASE_URL . 'login');
    }

    /*
    * Control de ABM Usuarios
    */
    function crudUsers(){
        $this->authHelper->checkAdmin();
        $users = $this->model->getUsers();
        $this->view->crudUsers($users);
    } 

    //Cambia admin/user ó user/admin
    function toggleAdmin($id) {
        $this->authHelper->checkAdmin();
        $user = $this->model->getUser($id);
        var_dump ($user);
        if ($user->admin == 1) {
            $admin=0;
        } else {
            $admin=1;
        }
        $this->model->updateAdmin($admin,$id);
        header("Location: " . BASE_URL . 'crudUsers');
    }

    //Elimina un usuario
    function removeUser($id) {
        $this->authHelper->checkAdmin();
        $lastId = $this->model->removeUser($id);
        if ($lastId){
            header("Location: " . BASE_URL . crudUsers); 
        }
        else{
            //Asumo error para evitar bug
            $this->view->showError('Existen datos relacionados a este usuario, eliminelos');
        }
    }
}