<?php

require_once "conexion.php";
use PhpOffice\PhpSpreadsheet\IOFactory;


class ComponentesModelo{

    /*static public function mdlCargaMasivaComponentes($fileComponentes){

        $nombreArchivo = $fileComponentes['tmp_name'];

        $documento = IOFactory::load($nombreArchivo);

        $hojaCategorias = $documento->getSheet(1);
        $numeroFilasCategorias = $hojaCategorias->getHighestDataRow(); 
        
        $hojaComponentes = $documento->getSheetByName("Componentes");
        $numeroFilasComponentess = $hojaComponentes->getHighestDataRow();

        $categoriasRegistradas = 0;
        $ComponentesRegistrados = 0;


        //CICLO FOR PARA REGISTROS DE PRODUCTOS
        for ($i=0; $i <= $numeroFilasProductos ; $i++) { 

            $Componente = $hojaProductos->getCell("A".$i);
            $descripccion = ProductosModelo::mdlBuscarIdCategoria($hojaProductos->getCell("B".$i));
            $proveedor = $hojaProductos->getCell("C".$i);
            //$fecha_actualizacion_producto = date('Y-m-d');

            if(!empty($codigo_producto)){
                $stmt = Conexion::conectar()->prepare("INSERT INTO Componentes_PROTOS(Componente,
                                                                            DESCRIPCCION,
                                                                            PROVEEDOR,
                                                                            DATE_INSERT)
                                                                    values(:Componente,
                                                                            :descripccion,
                                                                            :proveedor,
                                                                            NOW());");

                $stmt -> bindParam(":Componente",$codigo_producto,PDO::PARAM_STR);
                $stmt -> bindParam(":descripccion",$id_categoria_producto[0],PDO::PARAM_STR);
                $stmt -> bindParam(":proveedor",$descripcion_producto,PDO::PARAM_STR);


                if($stmt->execute()){
                    $productosRegistrados = $productosRegistrados + 1;
                }else{
                    $productosRegistrados = 0;
                }
            }
        }
        
        $respuesta["totalCategorias"] = $categoriasRegistradas;
        $respuesta["totalProductos"] = $productosRegistrados;

        return $respuesta;
    }

    static public function mdlBuscarIdCategoria($nombreCategoria){

        $stmt = Conexion::conectar()->prepare("select id_categoria from categorias where nombre_categoria = :nombreCategoria");
        $stmt -> bindParam(":nombreCategoria", $nombreCategoria,PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetch();

    }*/
    
    static public function mdlListarComponentes(){

        $stmt = Conexion::conectar()->prepare('call prc_ListarFamilias');
        
        $stmt->execute();

        return $stmt->fetchAll();
        
    }
    
    static public function mdlRegistrarComponente($Componente, $descripccion, $proveedor){
        $fecha = date("Y-m-d H:i:s");
        try{
                $stmt = Conexion::conectar()->prepare("INSERT INTO Componentes_PROTOS(Componente,
                                                                    DESCRIPCCION,
                                                                    PROVEEDOR,
                                                                    DATE_INSERT)
                                                        VALUES(:Componente,
                                                               :descripccion,
                                                               :proveedor,
                                                               :fecha)");

                $stmt -> bindParam(":Componente", $Componente, PDO::PARAM_STR);
                $stmt -> bindParam(":descripccion", $descripccion, PDO::PARAM_STR);
                $stmt -> bindParam(":proveedor", $proveedor, PDO::PARAM_STR);
                $stmt -> bindParam(":fecha", $fecha, PDO::PARAM_STR);

                if($stmt -> execute()){
                    $resultado = "ok";
                }else{
                    $resultado="error";
                }
        }
        catch (Exception $e){
            $resultado = "Excepcion capturada: ". $e->getMessage(). "\n";
        }
        
        return $resultado;

        $stmt = null;
    }

    static public function mdlActualizarInformacion($table, $data, $id, $nameId){

        $set = "";

        foreach($data as $key => $value){

            $set.= $key." = : ".$key.",";

        }

        $set = substr($set, 0, -1);

        $stmt = Conexion::conectar()->prepare("UPDATE $table SET $set WHERE $nameId= :$nameId");

        foreach($data as $key => $value){

            $stmt->bindParam(":".$key, $data[$key], PDO::PARAM_STR);
        }

        $stmt->bindParam(":".$nameId, $id, PDO::PARAM_STR);

        if($stmt->execute()){

            return "ok";
        }
        else{
            return Conexion::conectar()->errorInfo();
        }
    }
}