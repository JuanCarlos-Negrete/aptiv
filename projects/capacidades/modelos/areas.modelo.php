<?php

require_once "conexion.php";

class AreasModelo{


    static public function mdlListarAreas(){

        $stmt = Conexion::conectar()->prepare("SELECT ARE_AREA FROM areas ");

        $stmt -> execute();

        return $stmt->fetchAll();
    }
}