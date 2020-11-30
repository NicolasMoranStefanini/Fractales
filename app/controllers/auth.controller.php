<?php
include_once 'app/views/auth.view.php';
include_once 'app/models/user.model.php';

class AuthController {

    private $model;
    private $view;

    public function __construct() {
        $this->model = new UserModel();
        $this->view = new AuthView();
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
        }
        //Redirijo al home
        header("Location: " . BASE_URL . 'home');      
    }

    function showRegister() {
      $this->view->showRegisterForm();
    }

    function logout() {
        session_start();
        session_destroy();
        header("Location: " . BASE_URL . 'home');
    }
   
    /*
     * Barrera de seguridad para usuario administrador
     */
    function onlyAdmins() {
        if (!isset($_SESSION['ID_USER'])) {
            header("Location: " . BASE_URL . "login");
            die(); 
        }
        if ($_SESSION['ADMIN'] == '0'){
            header("Location: " . BASE_URL . "login");
            die(); 
        }
    }

    /*
    * Control de ABM Usuarios
    */
    function crudUsers(){
        $this->onlyAdmins();
        $users = $this->model->getUsers();
        $this->view->crudUsers($users);
    } 

    //Cambia admin/user ó user/admin
    function toggleAdmin($id) {
        $this->onlyAdmins();
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
        $this->onlyAdmins();
        $this->model->removeUser($id);
        header("Location: " . BASE_URL . crudUsers); 
        
    }

}