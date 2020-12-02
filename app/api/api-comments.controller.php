<?php
//require_once 'app/models/products.model.php';
require_once 'app/models/user.model.php';
require_once 'app/api/api.view.php';

class ApiCommentsController {

    private $model;
    private $view;

    function __construct() {
        //$this->modelProducts = new ProductsModel();
        $this->model = new UserModel();
        $this->view = new APIView();
       // $this->data = file_get_contents("php://input");
    }

    // Lee la variable asociada a la entrada estandar y la convierte en JSON
    function getData(){ 
        return json_decode($this->data); 
    } 

    public function getCommentsById($params) {
        $id = $params[':ID'];
        $comments = $this->model->getCommentsById($id);
        $this->view->response($comments, 200);
    }

    public function removeComment($params) {
        $this->onlyAdmins();
        $id = $params[':ID'];
        $this->model->removeComment($id);
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
    public function show404($params = null) {
        $this->view->response("El recurso solicitado no existe", 404);
    }

}