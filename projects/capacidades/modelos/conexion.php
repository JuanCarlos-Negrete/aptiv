<?php

class Conexion{

    static public function conectar(){
        try {
            $conn = new PDO("mysql:host=10.215.86.236;dbname=delphiv2","fz6r11","R3ci0sas.1985",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            return $conn;
        }
        catch (PDOException $e) {
            echo 'Falló la conexión: ' . $e->getMessage();
        }

    }
}
