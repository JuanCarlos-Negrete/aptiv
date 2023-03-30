<?php

require_once "conexion.php";

class FamiliasModelo{


    static public function mdlListarFamilias(){

        $stmt = Conexion::conectar()->prepare("SELECT TIPO_ID, TIPO_CONECTOR FROM tipo_conector ORDER BY TIPO_CONECTOR");

        $stmt -> execute();

        return $stmt->fetchAll();
    }
}