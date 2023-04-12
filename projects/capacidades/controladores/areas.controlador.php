<?php

class AreasControlador{

    static public function ctrListarAreas(){

        $areas = AreasModelo::mdlListarAreas();

        return $areas;

    }
}