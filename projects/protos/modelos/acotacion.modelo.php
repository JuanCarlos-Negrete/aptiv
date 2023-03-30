<?php

require_once "conexion.php";

class AcotacionModelo{


    static public function mdlListarAcotacion(){

        $stmt = Conexion::conectar()->prepare("SELECT ACOTACION_ID, UPPER(ACOTACION) FROM TIPO_ACOTACION ORDER BY ACOTACION");

        $stmt -> execute();

        return $stmt->fetchAll();
    }
}