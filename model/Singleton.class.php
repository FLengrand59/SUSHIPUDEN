<?php
/*
* Mysql database class - only one connection alowed
*/
class Singleton {
    private $_connection;
    private static $_instance; //instance unique
    private $_host = "localhost";
    private $_username = "root";
    private $_password = "";
    private $_dbname = "sushipuden";
    /*
    Get an instance of the Database
    si une instance existe la methode va la retourner
    @return Instance
    */
    public static function getInstance() {
        if(!self::$_instance) {
            self::$_instance = new Singleton();
        }
        return self::$_instance;
    }

    private function __construct() {
        try{
            $this->_connection = new PDO('mysql:host='.$this->_host.';dbname='.$this->_dbname,
                $this->_username, $this->_password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        } catch (PdoException $e) {
            echo 'Erreur de connexion : : '.$e->getMessage();
        }
    }
    public function __destruct() {
        $this->_connection = null;
    }

    public function getConnection() {
        return $this->_connection;
    }
}