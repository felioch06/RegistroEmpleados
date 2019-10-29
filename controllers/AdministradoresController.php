<?php
    class AdministradoresController extends Administrador{

        private $security;
        private $empleado;

        public function __construct(){
            try{
                $this->security = new Security();
                $this->security->validar_sesion();
            }catch(Exception $e){
                die($e->getMessage());
            }
        }
        public function home(){
            $title = "Home - Administrador";
            require_once('views/administrador/home.php');
        }

        public function registrarEmpleado(){
            $title = "Registrar Empleado";
            require_once('views/administrador/registrarEmpleado.php');
        }
        
        public function consultarEmpleado(){
            $title = "Consultar Empleado";
            require_once('views/administrador/consultarEmpleado.php');
        }

        public function store(){
            $nombres = $_POST['nombres'];
            $apellidos = $_POST['apellidos'];
            $correo = $_POST['correo'];
            $contra = $_POST['contra'];
            $fk_tipo_documento = $_POST['fk_tipo_documento'];
            $documento = $_POST['documento'];
            $fk_cargo = $_POST['fk_cargo'];
            $fk_rol = $_POST['fk_rol'];
            $fecha_creacion = $_POST['fecha_creacion'];

            parent::stored($fk_rol,$fk_cargo,$fk_tipo_documento,$documento,$nombres,$apellidos,$correo,$contra,$fecha_creacion);

            header('location:?class=Administradores&view=registrarEmpleado&correcto=correcto');
        }
    }
?>