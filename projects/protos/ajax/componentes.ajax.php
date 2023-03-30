<?php

    require_once "../controladores/componentes.controlador.php";
    require_once "../modelos/componentes.modelo.php";

    require_once "../vendor/autoload.php";

    class ajaxComponentes{

        public $fileComponentes;

        public $Componente;
        public $descripccion;
        public $proveedor;

        public function ajaxCargaMasivaComponentes(){

            $respuesta = ComponentessControlador::ctrCargaMasivaComponentes();

            echo json_encode($respuesta);
        }

        public function ajaxListarComponentes(){

            $Componentes = ComponentesControlador::ctrListarComponentes();
            
            echo json_encode($Componentes);
        }

        public function ajaxRegistraComponentes(){

            $Componente = ComponentesControlador::ctrRegistrarComponentes($this->Componente, $this->descripccion, $this->proveedor);
            echo json_encode($Componente);
        }
        
        /*static public majaxActualizarComponentes($data){

            /*$table = "ComponenteS_PROTOS";
            $id = $_POST["Componente"];
            $nameId = "Componente";

            $respuesta = ComponentesControlador::ctrActualizarComponentes($table, $data, $id, $nameId);
            echo json_encode($respuesta);
        }*/
    }

    if(isset($_POST['accion']) && $_POST['accion'] == 1){//parametro para listar Componentes
        $Componentes = new ajaxComponentes();
        $Componentes -> ajaxListarComponentes();
    }
    else if(isset($_POST['accion']) && $_POST['accion'] == 2){//parametro para registra Componentes

        $registroComponente = new ajaxComponentes();
        $registroComponente -> Componente = $_POST["familia"];
        $registroComponente -> descripccion = $_POST["proceso"];
        $registroComponente -> proveedor = $_POST["acotacion"];
        $registroComponente -> proveedor = $_POST["valor"];

        $registroComponente -> ajaxRegistraComponentes();
    }
   /* else if(isset($_POST['accion']) && $_POST['accion'] == 4){

        $actualizarComponente = new ajaxComponentes();

        $data = array(
            "Componente" => $_POST["Componente"],
            "DESCRIPCCION" => $_POST["descripccion"],
            "PROVEEDOR" => $_POST["proveedor"]
        );

        $actualizarComponente -> ajaxActualizarComponentes($data);
    }
    /*else if(isset($_FILES)){
        $archivo_Componentes = new ajaxComponentes();
        $archivo_Componentes-> fileComponentes = $_FILES['fileComponentes'];
        $archivo_Componentes -> ajaxCargaMasivaComponentes();
    }*/