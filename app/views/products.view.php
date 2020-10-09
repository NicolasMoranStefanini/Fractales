<?php

require_once('libs/smarty/libs/Smarty.class.php');

class ProductsView {
   
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
        $this->smarty->assign('title', "Music Store");
    }

    function showItems($items) { //Muestra todos los items
        $this->smarty->assign('items', $items);
        $this->smarty->display('templates/itemList.tpl');
    }

    function showCategorys($categorys) { //Muestra todas las categorias
        $this->smarty->assign('categorys', $categorys);
        $this->smarty->display('templates/categoryList.tpl');
    }

    function showItem($item) {  //Muestra el detalle de cada item
        $this->smarty->assign('item', $item);
        $this->smarty->display('templates/itemDetail.tpl');
    }
     
    function ProductsByCategory($category,$products) {  //Muestra los productos por categoria
        $this->smarty->assign('category', $category);
        $this->smarty->assign('products', $products);
        $this->smarty->display('templates/productsbycategory.tpl');
    }

    function crudItems($items , $categorys) { //Muestra el abm productos
        $this->smarty->assign('items', $items);
        $this->smarty->assign('categorys', $categorys);
        $this->smarty->display('templates/crudProducts.tpl');
    }

    function showUpdate($product, $categorys){ //Muestra el formulario de edicion
        $this->smarty->assign('product', $product);
        $this->smarty->assign('categorys', $categorys);
        $this->smarty->display('templates/updateProduct.tpl');
    }

    function crudCategorys($categorys, $id = null, $category = null){
        $this->smarty->assign('categorys', $categorys);
        $this->smarty->assign('category', $category);
        $this->smarty->assign('id', $id);
        $this->smarty->display('templates/crudCategorys.tpl');
    }

    function showError($msg) {
        $this->smarty->assign('msg', $msg);
        $this->smarty->display('templates/error.tpl');
    }
}