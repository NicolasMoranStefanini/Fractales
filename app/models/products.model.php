<?php

class ProductsModel {

    private $db;

    function __construct() {
        //Abro la conexión
        $this->db = $this->connect();
    }

    /**
     * Abre conexión a la base de datos;
     */
    private function connect() {
        $db = new PDO('mysql:host=localhost;'.'dbname=db_music_store;charset=utf8', 'root', '');
        return $db;
    }

    /**
     * Devuelve todas los items de la base de datos.
     */
    function getAll() {

        // Envia la consulta 
        $query = $this->db->prepare('SELECT * FROM products');
        $query->execute();

        // Obtengo la respuesta con un fetchAll
        $items = $query->fetchAll(PDO::FETCH_OBJ); // arreglo de items

        return $items;
    }

    function get($id) {
        $query = $this->db->prepare("SELECT * FROM products WHERE id = ?");
        $query->execute([$id]);
        $item = $query->fetch(PDO::FETCH_OBJ);
        return $item;
    }


    function getCategorys() {
        // Envia la consulta 
        $query = $this->db->prepare('SELECT * FROM categorys');
        $query->execute();
        // Obtengo la respuesta con un fetchAll
        $categorys = $query->fetchAll(PDO::FETCH_OBJ); // arreglo de categorias
        return $categorys;
    }

   function getCategoryById($id_cat) {
        $query = $this->db->prepare('SELECT * FROM categorys WHERE id_category = ?');
        $query->execute([$id_cat]);
        $category = $query->fetch(PDO::FETCH_OBJ);
        return $category;
    }
    
    function getProductsByCategoryId($id_cat) {
        $query = $this->db->prepare('SELECT * FROM products WHERE id_category = ?');
        $query->execute([$id_cat]);
        $products = $query->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }

    function removeProduct($id) {  
        $query = $this->db->prepare('DELETE FROM `products` WHERE `products`.`id` = ?');
        $query->execute([$id]);
  }
}