<?php
    class Security extends DB{
        public function validar_sesion(){
            if(empty($_SESSION['usuario']) || is_null($_SESSION['usuario'])){
                header("location:?class=Login&view=login");
            }
        }
    }
?>