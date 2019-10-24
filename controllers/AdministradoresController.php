<?php
    class AdministradoresController extends Administrador{

        private $security;

        public function __construct(){
            try{
                $this->security = new Security();
                $this->security->validar_sesion();
            }catch(Exception $e){
                die($e->getMessage());
            }
        }
        public function home(){
            $this->security->validar_sesion();

            $title = "Home - Administrador";
            require_once('views/administrador/home.php');
        }
    }
?>