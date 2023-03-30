<?php

class ProcesoControlador{

    static public function ctrListarProceso(){

        $proceso = ProcesoModelo::mdlListarProceso();

        return $proceso;

    }
}