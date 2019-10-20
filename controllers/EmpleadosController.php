<?php
    class EmpleadosController extends Empleado{
        
        public function index(){
            require_once('views/all/index.php');
        }

        public function consulta(){
            require_once('views/empleado/control.php');
        }
    }
?>