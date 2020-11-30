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
    * Envia todos los usuarios
    */
    public function getUsers() {
        $query = $this->db->prepare('SELECT * FROM users');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function getUser($id) {
        $query = $this->db->prepare('SELECT * FROM users WHERE id = ?');
        $query->execute([$id]);
        return $query->fetch(PDO::FETCH_OBJ);
    }
    /*
    * Agrega el usuario nuevo
    */
    public function newUser($email,$username,$admin,$password) {
        $query = $this->db->prepare('INSERT INTO `users` (`id`, `nombre`, `mail`, `admin`, `password`) VALUES (NULL,?,?,?,?)');
        $query->execute([$username,$email,$admin,$password]);
    }

    /*
    * Actualiza el estado de administrador por id
    */
    function updateAdmin ($admin,$id){
        $query = $this->db->prepare('UPDATE `users` SET `admin` = ? WHERE users.id = ?');
        $query->execute([$admin,$id]); 
    }

    /*
    * Remueve un usuario por id
    */
    function removeUser($id) {  
        $query = $this->db->prepare('DELETE FROM users WHERE id = ?');
        $query->execute([$id]);
    }
}