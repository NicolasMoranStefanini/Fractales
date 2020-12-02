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
     * Devuelve todos los productos de la base de datos.
     */
    function getAll() {

        // Envia la consulta 
        $query = $this->db->prepare('SELECT * FROM products');
        $query->execute();

        // Obtengo la respuesta con un fetchAll
        $items = $query->fetchAll(PDO::FETCH_OBJ); // arreglo de items

        return $items;
    }

    /*
    * Devuelve un producto
    */
    function get($id) {
        $query = $this->db->prepare("SELECT * FROM products WHERE id = ?");
        $query->execute([$id]);
        $item = $query->fetch(PDO::FETCH_OBJ);
        return $item;
    }

    /*
    * Devuelve todas las categorias
    */
    function getCategories() {
        // Envia la consulta 
        $query = $this->db->prepare('SELECT * FROM categorys');
        $query->execute();
        // Obtengo la respuesta con un fetchAll
        $categories = $query->fetchAll(PDO::FETCH_OBJ); // arreglo de categorias
        return $categories;
    }

    /*
    *Devuelve una categoria por id
    */
   function getCategoryById($id_cat) {
        $query = $this->db->prepare('SELECT * FROM categorys WHERE id_category = ?');
        $query->execute([$id_cat]);
        $category = $query->fetch(PDO::FETCH_OBJ);
        return $category;
    }
    
    /*
    *Devuelve todos los productos por categoria
    */
    function getProductsByCategoryId($id_cat) {
        $query = $this->db->prepare('SELECT * FROM products WHERE id_category = ?');
        $query->execute([$id_cat]);
        $products = $query->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }

    /*
    * Remueve un producto por id
    */
    function removeProduct($id) {  
        $query = $this->db->prepare('DELETE FROM products WHERE products.id = ?');
        $query->execute([$id]);
    }

    /*
    * Actualiza un producto por id
    */
    function updateProduct($name, $brand, $details, $category, $id) {

        $query = $this->db->prepare('UPDATE `products` SET `brand` = ?, `details`=?, `name`=?, `id_category`=? WHERE `products`.`id` = ?');
        $query->execute([$brand,$details,$name,$category,$id]);
    }

    /*
    * Inserta un producto
    */
    function insertProduct($name, $brand, $details, $category) {
        $query = $this->db->prepare('INSERT INTO products (`name`, brand, details, id_category) VALUES (?,?,?,?)');
        $query->execute([$name, $brand, $details, $category]);
        //return $this->db->lastInsertId();
    }

    function insertCategory($name){
        $query = $this->db->prepare('INSERT INTO `categorys` (`id_category`, `name`) VALUES (NULL, ?)');
        $query->execute([$name]);
    }

    
    /*
    * Remueve una categoria por id
    */
    function removeCategory($id) {  
        $query = $this->db->prepare('DELETE FROM `categorys` WHERE categorys.id_category = ?');
        $result = $query->execute([$id]);
        return ($result);
     }

    /*
    * Actualiza una categoria por id
    */
    function updateCategory ($name,$id){
        $query = $this->db->prepare('UPDATE `categorys` SET `name` = ? WHERE categorys.id_category = ?');
        $query->execute([$name,$id]);
    }

}