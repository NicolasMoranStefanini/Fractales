<?php
include_once 'app/models/products.model.php';
include_once 'app/views/products.view.php';

class ProductsController {

    private $model;
    private $view;

    function __construct() {
        $this->model = new ProductsModel();
        $this->view = new ProductsView();
        session_start();
    }

    /*
    * Consulta e imprime todos los productos
    */
    function showItems(){
        // obtiene los productos del modelo
        $items = $this->model->getAll();  
        $this->view->showItems($items);
    }   

    /*
    * Consulta el detalle de cada item
    */
    function showDetail($id) {
        $item = $this->model->get($id);
        if($item) {
            $this->view->showItem($item);}
        else {
           $this->view->showError('Product out of stock');
        }
    }

    /*
    * Consulta e imprime todas las categorias
    */
    function showCategorys(){
        // obtiene los productos del modelo
        $categorys = $this->model->getCategorys();  
        $this->view->showCategorys($categorys);
    } 
    
    /*
    * Muestra los productos por categoria
    */
    function showProductsCategory($id_cat) {
        $category = $this->model->getCategoryById($id_cat);
        $products = $this->model->getProductsByCategoryId($id_cat);
        $this->view->ProductsByCategory($category,$products);
    
    }

     /**
     * Barrera de seguridad para usuario logueado
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
    * Muestra el abm, si el usuario es administrador
    */
    function crudItems(){
        $this->onlyAdmins();
        // obtiene los productos del modelo
        $items = $this->model->getAll();  
        $this->view->crudItems($items);
    } 
    
    /**
     * Elimina el producto del sistema
     */
    function deleteProduct($id) {
        $this->onlyAdmins();
        $this->model->removeProduct($id);
        header("Location: " . BASE_URL . crudProducts); 
    }

}

