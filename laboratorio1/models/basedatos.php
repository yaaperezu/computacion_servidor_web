<?php
class basedatos
{
    
    public static function Conectar()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=mvc_php;charset=utf8', 'root', '');
        //Errores
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
}
?>