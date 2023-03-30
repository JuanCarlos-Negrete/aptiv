<?php

require_once "conexion.php";

class ProcesoModelo{


    static public function mdlListarProceso(){

        $stmt = Conexion::conectar()->prepare("SELECT PROCESO_ID, UPPER(PROCESADO) FROM PROCESADO ORDER BY PROCESADO");

        $stmt -> execute();

        return $stmt->fetchAll();
    }
}