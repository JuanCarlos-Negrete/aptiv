<?php

    require_once "../controladores/cables.controlador.php";
    require_once "../modelos/cables.modelo.php";

    require_once "../vendor/autoload.php";

    class ajaxCables{

        public $fileCables;

        public $cable;
        public $descripccion;
        public $proveedor;

        public function ajaxCargaMasivaCables(){

            $respuesta = CablessControlador::ctrCargaMasivaCables();

            echo json_encode($respuesta);
        }

        public function ajaxListarCables(){

            $cables = CablesControlador::ctrListarCables();
            
            echo json_encode($cables);
        }

        public function ajaxRegistraCables(){

            $cable = CablesControlador::ctrRegistrarCables($this->cable, $this->descripccion, $this->proveedor);
            echo json_encode($cable);
        }
        
        public function majaxActualizarCables($data){

            $table = "CABLES_PROTOS";
            $id = $_POST["cable"];
            $nameId = "CABLE";

            $respuesta = CablesControlador::ctrActualizarCables($table, $data, $id, $nameId);
            echo json_encode($respuesta);
        }
    }

    if(isset($_POST['accion']) && $_POST['accion'] == 1){//parametro para listar cables
        $cables = new ajaxCables();
        $cables -> ajaxListarCables();
    }
    else if(isset($_POST['accion']) && $_POST['accion'] == 2){//parametro para registra cables

        $registroCable = new ajaxCables();
        $registroCable -> cable = $_POST["cable"];
        $registroCable -> descripccion = $_POST["descripccion"];
        $registroCable -> proveedor = $_POST["proveedor"];

        $registroCable -> ajaxRegistraCables();
    }
    else if(isset($_POST['accion']) && $_POST['accion'] == 4){

        $actualizarCable = new ajaxCables();

        $data = array(
            "CABLE" => $_POST["cable"],
            "DESCRIPCCION" => $_POST["descripccion"],
            "PROVEEDOR" => $_POST["proveedor"]
        );

        $actualizarCable -> ajaxActualizarCables($data);
    }
    else if(isset($_FILES)){
        $archivo_cables = new ajaxCables();
        $archivo_cables-> fileCables = $_FILES['fileCables'];
        $archivo_cables -> ajaxCargaMasivaCables();
    }