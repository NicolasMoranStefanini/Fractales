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
* Consulta e imprime el detalle de cada item
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
    function showCategories(){
        // obtiene los productos del modelo
        $categories = $this->model->getCategories();  
        $this->view->showCategories($categories);
    } 
    
/*
* Obtiene y muestra los productos por categoria
*/
    function showProductsCategory($id_cat) {
        $category = $this->model->getCategoryById($id_cat);
        $products = $this->model->getProductsByCategoryId($id_cat);
        $this->view->ProductsByCategory($category,$products);
    
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
* Control de ABM productos
*/
    function crudItems(){
        $this->onlyAdmins();
        // obtiene los productos del modelo
        $items = $this->model->getAll();  
        $categories = $this->model->getCategories();
        $this->view->crudItems($items,$categories);
    } 
    
/*
* Elimina el producto del sistema
*/
        function deleteProduct($id) {
            $this->onlyAdmins();
            $this->model->removeProduct($id);
            header("Location: " . BASE_URL . crudProducts); 
        }

/*
* Modifica un producto
*/
        function updateProduct($id) {
            $this->onlyAdmins();
            $categories = $this->model->getCategories();
            $product = $this->model->get($id);
            $this->view->showUpdate($product,$categories);
        }

/*
* Realiza la actualizacion
*/
        function doUpdate(){
            $this->onlyAdmins();
            $name = $_POST['name'];
            $brand = $_POST['brand'];
            $details = $_POST['details'];
            $category = $_POST['category'];
            $id = $_POST['id'];
            $this->model->updateProduct($name, $brand, $details, $category);
            header("Location: " . BASE_URL . crudProducts); 
        }

/*
* Agrega un producto
*/
        function newProduct() {
            $this->onlyAdmins();
            $name = $_POST['name'];
            $brand = $_POST['brand'];
            $details = $_POST['details'];
            $category = $_POST['category'];
            // verifico campos obligatorios
            if (empty($name) || empty($brand) || empty($details) || empty($category)) {
                $this->view->showError('Faltan datos obligatorios');
                die();
            }
            $fileLocation = 'img/unknown.png';
            $check = getimagesize($_FILES['image']['tmp_name']);
            // inserto la tarea en la DB
            if ($check){
                $fileLocation = 'img/' . basename($_FILES['image']["name"]); 
                move_uploaded_file($_FILES['image']['tmp_name'], $fileLocation);
                $this->model->insertProduct($name, $brand, $details, $category, $fileLocation);
            } else {
                $this->model->insertProduct($name, $brand, $details, $category, $fileLocation );
            }
            header("Location: " . BASE_URL . crudProducts); 
        }

/*
* Control de ABM Categorias
*/
    function crudCategories($id = null){
        $this->onlyAdmins();
        $categories = $this->model->getCategories();
        $category = $this->model->getCategoryById($id);
        $this->view->crudCategories($categories,$id,$category);
    } 

/*
* Nueva categoria
*/
        function newCategory() {
            $this->onlyAdmins();
            $name = $_POST['name'];
            $this->model->insertCategory($name);
            header("Location: " . BASE_URL . crudCategories); 
        }

/*
* Elimina una categoria por id
*/
        function deleteCategory($id) {
            $this->onlyAdmins();
            $result = $this->model->removeCategory($id);
            if ($result) {
                header("Location: " . BASE_URL . crudCategories); 
            }
            else {
                $this->view->showError('Category in use, delete the products to proceed');
            }
        }

/*
* Modifica una categoria por id
*/
        function doUpdateCategory() {
            $this->onlyAdmins();
            $name = $_POST['name'];
            $id = $_POST['id'];
            $this->model->updateCategory($name,$id);
            header("Location: " . BASE_URL . crudCategories); 
        }
}