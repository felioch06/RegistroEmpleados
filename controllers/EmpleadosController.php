<?php
    class EmpleadosController extends Empleado{
        
        public function index(){
            $title = "Regitro";
            require_once('views/all/index.php');
        }

        public function ingresoDocumento(){
            $title = "Consulta";
            require_once('views/empleado/ingresoDocumento.php');
        }

        public function consulta(){
            $title = "Consulta";

            $documento = $_POST['documento'];
            $cantidad = parent::consultaCantidadEmpleados($documento);

            if($cantidad->documento > 0){
                require_once('views/empleado/control.php');
            }else{
                echo "no exite";
            }
        }

        public function registrarEntrada(){
            $documento = $_POST['documento'];
            date_default_timezone_set('America/Bogota');
            $fecha = date("Y-m-d");
            $hora_actual = date("G:i:s"); 
            $cantidad = parent::consultaCantidadEmpleados($documento);

            if($cantidad->documento > 0){
                $consulta = parent::consultaDocumento($documento);
                @$consultaControlEmpleado = parent::consultaRegistroEmpleado($consulta->id_usuario, $fecha);

                if($consulta->documento == $documento){
                    if($fecha == $consultaControlEmpleado->fecha && $documento == $consulta->documento){
                        header('location:?class=Empleados&view=index&yaIngreso=yaIngreso');
                    }else{
                    parent::registroEnter($consulta->id_usuario, $fecha, $hora_actual);
                    header('location:?class=Empleados&view=index&entrada=entrada');
                    }
   
                }

            }else{
                header('location:?class=Empleados&view=index&noExiste=noExiste');
            }

            
        }

        public function registrarSalida(){
            $documento = $_POST['documento'];
            date_default_timezone_set('America/Bogota');
            $fecha = date("Y-m-d");
            $hora_actual = date("G:i:s");
            $cantidad = parent::consultaCantidadEmpleados($documento);
  
            if($cantidad->documento > 0){
                $consulta = parent::consultaDocumento($documento);
                $consultaControlEmpleado = parent::consultaRegistroEmpleado($consulta->id_usuario, $fecha);

                if($consultaControlEmpleado->hora_salida == null && $fecha == $consultaControlEmpleado->fecha){
                parent::registroExit($hora_actual, $fecha, $consulta->id_usuario);
                header('location:?class=Empleados&view=index&salida=salida');

                }else{
                    header('location:?class=Empleados&view=index&yaIngresoSalida=yaIngresoSalida');
                }
            }else{
                header('location:?class=Empleados&view=index&noExiste=noExiste');
            }
            
        }
    }
?>