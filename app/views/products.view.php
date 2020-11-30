<?php

require_once('libs/smarty/libs/Smarty.class.php');

class ProductsView {
   
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
        $this->smarty->assign('title', "Music Store");
    }

    //Muestra todos los items
    function showItems($items) { 
        $this->smarty->assign('items', $items);
        $this->smarty->display('templates/itemList.tpl');
    }

    //Muestra todas las categorias
    function showCategories($categories) { 
        $this->smarty->assign('categories', $categories);
        $this->smarty->display('templates/categoryList.tpl');
    }

    //Muestra el detalle de cada item
    function showItem($item) {  
        $this->smarty->assign('item', $item);
        $this->smarty->display('templates/itemDetail.tpl');
    }
     
    //Muestra los productos por categoria
    function ProductsByCategory($category,$products) {  
        $this->smarty->assign('category', $category);
        $this->smarty->assign('products', $products);
        $this->smarty->display('templates/productsbycategory.tpl');
    }

    //Muestra el abm productos
    function crudItems($items , $categories) {
        $this->smarty->assign('items', $items);
        $this->smarty->assign('categories', $categories);
        $this->smarty->display('templates/crudProducts.tpl');
    }

    //Muestra el formulario de edicion
    function showUpdate($product, $categories){
        $this->smarty->assign('product', $product);
        $this->smarty->assign('categories', $categories);
        $this->smarty->display('templates/updateProduct.tpl');
    }

    function crudCategories($categories, $id = null, $category = null, $error = null){
        $this->smarty->assign('categories', $categories);
        $this->smarty->assign('category', $category);
        $this->smarty->assign('id', $id);
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/crudCategories.tpl');
    }

    function showError($msg) {
        $this->smarty->assign('msg', $msg);
        $this->smarty->display('templates/error.tpl');
    }
}