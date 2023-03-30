<?php

    class ComponentesControlador{

        static public function ctrCargaMasivaComponentes($fileComponentes){
            
            $respuesta = ComponentesModelo::mdlCargaMasivaComponentes($fileComponentes);

            return $respuesta;
        }

        static public function ctrListarComponentes(){

            $Componentes =  ComponentesModelo::mdlListarComponentes();
           
            return $Componentes;
        }

        static public Function ctrRegistrarComponentes($Componentes, $descripccion, $proveedor)
        {
            $registraComponentes = ComponentesModelo::mdlRegistrarComponentes($Componentes, $descripccion, $proveedor);

            return $registraComponentes;
        }

        /*static public function ctrActualizarComponentes($table, $data, $id, $nameId){

            $respuesta = ComponentesModelo::mdlActualizarInformacion($table, $data, $id, $nameId);

            return $respuesta;

        }*/
    }