<?php

class CommentsModel {

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

    function getCommentsById($id) {
          $query = $this->db->prepare('SELECT * FROM comment WHERE  id_product = ?');
          $query->execute([$id]);
          return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function removeComment($id) {
        $query = $this->db->prepare('DELETE FROM comment WHERE id = ?');
        $query->execute([$id]);
        return $query;
    }
}