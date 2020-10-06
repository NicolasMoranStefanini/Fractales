<?php

require_once('libs/smarty/libs/Smarty.class.php');

class ProductsView {
   
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
        $this->smarty->assign('title', "Music Store");
    }

    function showItems($items) {
        $this->smarty->assign('items', $items);
        $this->smarty->display('templates/itemList.tpl');
    }

    function showItem($item) {
        $this->smarty->assign('item', $item);
        $this->smarty->display('templates/itemDetail.tpl');
    }
     

}