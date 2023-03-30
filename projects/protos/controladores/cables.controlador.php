<?php

    class CablesControlador{

        static public function ctrCargaMasivaCables($fileCables){
            
            $respuesta = CablesModelo::mdlCargaMasivaCables($fileCables);

            return $respuesta;
        }

        static public function ctrListarCables(){

            $cables =  CablesModelo::mdlListarCables();
           
            return $cables;
        }

        static public Function ctrRegistrarCables($cables, $descripccion, $proveedor)
        {
            $registraCable = CablesModelo::mdlRegistrarCable($cables, $descripccion, $proveedor);

            return $registraCable;
        }

        static public function ctrActualizarCables($table, $data, $id, $nameId){

            $respuesta = CablesModelo::mdlActualizarInformacion($table, $data, $id, $nameId);

            return $respuesta;

        }
    }