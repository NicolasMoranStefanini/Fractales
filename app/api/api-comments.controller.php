<?php
require_once 'app/models/products.model.php';
require_once 'app/models/user.model.php';
require_once 'app/models/comments.model.php';
require_once 'app/api/api.view.php';

class ApiCommentsController {

    private $modelProducts;
    private $modelUsers;
    private $view;

    function __construct() {
        $this->modelProducts = new ProductsModel();
       // $this->$modelUsers = new UserModel();
        $this->modelComments = new CommentsModel();
        $this->view = new APIView();
       // $this->data = file_get_contents("php://input");
    }

    // Lee la variable asociada a la entrada estandar y la convierte en JSON
    function getData(){ 
        return json_decode($this->data); 
    } 

    public function getCommentsById($params) {
        $id = $params[':ID'];
        $comments = $this->modelComments->getCommentsById($id);
        $this->view->response($comments, 200);
    }

    public function removeComment($params) {
        $id = $params[':ID'];
        $this->modelComments->removeComment($id);
    }

    public function show404($params = null) {
        $this->view->response("El recurso solicitado no existe", 404);
    }

}