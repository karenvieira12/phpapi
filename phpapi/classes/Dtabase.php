<?php

class Database {
    private $db_host = 'localhost';
    private $db_name = 'phpapi';
    private $db_username = 'root';
    private $db_password = 'senac';

    function __construct(){

        try{
            $dsn = "mysql:host={$this->db_host};dbname={$this->db_nome};charset=utf8";
            $db_connection = new PDO($dsn, $this->db_username, $this->db_password);
            $db_connection->setAttribute(PDO::ATTR_ERREMODE, PDO::ERREMOTE_EXCEPTION);

            return $db_connection;
        } catch(PDOException $e){
            echo "Eroo de conexão".$e->getMenssage();
            exit;
        }
    }
}