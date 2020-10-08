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
}