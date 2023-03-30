<?php

class FamiliasControlador{

    static public function ctrListarFamilias(){

        $familias = FamiliasModelo::mdlListarFamilias();

        return $familias;

    }
}