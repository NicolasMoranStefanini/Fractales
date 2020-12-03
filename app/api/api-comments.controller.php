<?php
require_once 'app/models/user.model.php';
require_once 'app/api/api.view.php';

class ApiCommentsController {

    private $model;
    private $view;

    function __construct() {
        $this->model = new UserModel();
        $this->view = new APIView();
        $this->data = file_get_contents("php://input");
    }

    // Lee la variable asociada a la entrada estandar y la convierte en JSON
    function getData(){ 
        return json_decode($this->data); 
    } 

    /*
    * Guarda los comentarios de un producto en una variable consumida por la api
    */
    public function getCommentsById($params) {
        $id = $params[':ID'];
        $comments = $this->model->getCommentsById($id);
        $this->view->response($comments, 200);
    }

    /*
    * Elimina un comentario por su id 
    */
    public function removeComment($params) {
        //$this->onlyAdmins();
        $id = $params[':ID'];
        $this->model->removeComment($id);
    }

    public function addComment($params) {
      //  $this->onlyUsers();
        $body = $this->getData();
        $id_product   = $body->id_product;
        $id_user      = $body->id_user;
        $text         = $body->text;
        $rating       = $body->rating;
        $a = $this->model->addComment($id_product, $id_user, $text, $rating);
        if ($a>0) {
            $this->view->response($a, 200);
        }
        else { 
            $this->view->response("No se pudo insertar", 500);
        }
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
* Barrera de seguridad para usuario logeado
*/
    function onlyUsers() {
        if (!isset($_SESSION['ID_USER'])) {
            header("Location: " . BASE_URL . "login");
            die(); 
        }
    }   


    public function show404($params = null) {
        $this->view->response("El recurso solicitado no existe", 404);
    }

}