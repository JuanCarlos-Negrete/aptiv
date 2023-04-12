<?php

require_once "..controladores/areas.controlador.php";
require_once "..modelos/areas.modelo.php";

class AjaxAreas{

    public function ajaxListarAreas(){

        $areas = AreasControlador::ctrListarAreas();

        echo json_encode($areas, JSON_UNESCAPED_UNICODE);

    }

}

$areas = new AjaxAreas();
$areas -> ajaxListarAreas();
