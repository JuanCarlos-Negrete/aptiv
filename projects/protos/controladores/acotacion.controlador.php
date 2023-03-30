<?php

class AcotacionControlador{

    static public function ctrListarAcotacion(){

        $acotacion = AcotacionModelo::mdlListarAcotacion();

        return $acotacion;

    }
}