<?php
include_once 'app/models/products.model.php';
include_once 'app/views/products.view.php';

class ProductsController {

    private $model;
    private $view;

    function __construct() {
        $this->model = new ProductsModel();
        $this->view = new ProductsView();
    
    }

    function showItems(){
        // obtiene los productos del modelo
        $items = $this->model->getAll();  
        $this->view->showItems($items);
    }   

    function showDetail($id) {
        $item = $this->model->get($id);
        if($item) {
            $this->view->showItem($item);
        }
        else {
           $this->view->showError('Product out of stock');
        }
    }

    function showCategorys(){
        // obtiene los productos del modelo
        $categorys = $this->model->getCategorys();  
        $this->view->showCategorys($categorys);
    } 
    
    function showProductsCategory($id_cat) {
        $category = $this->model->getCategoryById($id_cat);
        $products = $this->model->getProductsByCategoryId($id_cat);
        $this->view->ProductsByCategory($category,$products);
    
    }





}

