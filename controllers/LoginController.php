<?php
    class LoginController {

        private $usuario;

        public function login(){
            $title = "Login Admin"; 
            require_once('views/login/login.php');
        }

        public function __construct(){
            try{
                $this->usuario = new Administrador();
            }catch(Exception $e){

            }
        }

        public function auth(){
            $correo = $_POST['correo'];
            $contra = $_POST['contra'];

            $usuario = $this->usuario->comprobar($correo, $contra);

            if($correo == $usuario->correo && $contra == $usuario->contra & $usuario->fk_rol == 1){
                $_SESSION['usuario'] = $usuario;
                header('location:?class=Administradores&view=home');
            }else{
                header('location:?class=Login&view=login&error=error');
            }

        }

        public function salir(){
            session_destroy();

            header('location:?class=Login&view=login');

            exit();
        }
    }
?>