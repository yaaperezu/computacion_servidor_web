<?php

class BD {

    private $link_bd = 'mysql:host=localhost;dbname=php_mvc;charset=utf8';
    private $usuario_bd = 'root';
    private $password_bd = '';
    protected $pdo;

    
    public function __CONSTRUCT() {
        try{
            $this->pdo = new PDO($this->link_bd, $this->usuario_bd, $this->password_bd);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e){ 
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    private function set_names(){
        return $this->pdo->query("SET NAMES 'utf8'");
    }

    
}