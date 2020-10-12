<?php

class UserModel {
    private $db;

    function __construct() {
        $this->db = $this->connect();
    }

    private function connect() {
        $db = new PDO('mysql:host=localhost;'.'dbname=db_music_store;charset=utf8', 'root', '');
        return $db;
    }

    /**
     * Devuelve un usuario dado un email.
     */
    public function getByMail($email) {
        $query = $this->db->prepare('SELECT * FROM users WHERE mail = ?');
        $query->execute([$email]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

    /*
    * Obtengo la llave
    */
    public function getKey(){
        $query = $this->db->prepare('SELECT * FROM adminkey WHERE 1');
        $query->execute();
        return $query->fetch(PDO::FETCH_OBJ);
    } 

    /*
    * Envia todos los usuarios
    */
    public function getUsers() {
        $query = $this->db->prepare('SELECT * FROM users');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    /*
    * Agrega el usuario nuevo
    */
    public function newUser($email,$username,$admin,$password) {
        $query = $this->db->prepare('INSERT INTO `users` (`id`, `nombre`, `mail`, `admin`, `password`) VALUES (NULL,?,?,?,?)');
        $query->execute([$username,$email,$admin,$password]);
    }

}