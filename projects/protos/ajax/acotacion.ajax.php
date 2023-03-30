<?php

require_once "../controladores/acotacion.controlador.php";
require_once "../modelos/acotacion.modelo.php";

class AjaxAcotacion{

    public function ajaxListarProceso(){

        $acotacion = AcotacionControlador::ctrListarAcotacion();

        echo json_encode($acotacion, JSON_UNESCAPED_UNICODE);

    }

}

$acotacion = new AjaxAcotacion();
$acotacion -> ajaxListarProceso();
