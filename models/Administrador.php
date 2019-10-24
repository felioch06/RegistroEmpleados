<?php
    class Administrador extends DB{
        public function comprobar($documento,$contra){
            try{
                $str = parent::conectar()->prepare("SELECT * FROM usuarios WHERE correo = ? AND contra = ?");
                $str->bindParam(1,$documento,PDO::PARAM_STR);
                $str->bindParam(2,$contra,PDO::PARAM_STR);
                $str->execute();
                return $str->fetch(PDO::FETCH_OBJ);
            }catch(Exception $e){
                die($e->getMessage());
            }
        }
    }
?>