<?php
    class SecurityController{
        public function salir(){
            session_destroy();

            header('location:?class=Login&view=login');

            exit();
        }
    }
?>