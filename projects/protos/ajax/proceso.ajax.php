<?php

require_once "../controladores/proceso.controlador.php";
require_once "../modelos/proceso.modelo.php";

class AjaxProceso{

    public function ajaxListarProceso(){

        $proceso = ProcesoControlador::ctrListarProceso();

        echo json_encode($proceso, JSON_UNESCAPED_UNICODE);

    }

}

$proceso = new AjaxProceso();
$proceso -> ajaxListarProceso();
