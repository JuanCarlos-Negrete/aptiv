<?php

require_once "../controladores/familias.controlador.php";
require_once "../modelos/familias.modelo.php";

class AjaxFamilias{

    public function ajaxListarFamilias(){

        $familias = FamiliasControlador::ctrListarFamilias();

        echo json_encode($familias, JSON_UNESCAPED_UNICODE);

    }

}

$familias = new AjaxFamilias();
$familias -> ajaxListarFamilias();
