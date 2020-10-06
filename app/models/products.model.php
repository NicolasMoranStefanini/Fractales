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
        $query = $this->db->prepare('SELECT * FROM products WHERE id = ?');
        $query->execute([$id]);
        $item = $query->fetch(PDO::FETCH_OBJ);
        return $item;
    }


}