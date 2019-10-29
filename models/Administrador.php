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

        public function consultaTipoDocumento(){
            try{
                $str = parent::conectar()->prepare("SELECT * FROM tipo_documento");
                $str->execute();
                return $str->fetchAll(PDO::FETCH_OBJ);
            }catch(Exception $e){
                die($e->getMessage());
            }
        }

        
        public function consultaUsuarios(){
            try{
                $str = parent::conectar()->prepare("SELECT * FROM usuarios ");
                $str->execute();
                return $str->fetchAll(PDO::FETCH_OBJ);
            }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function consultaDocumento($documento){
            try{
                $str = parent::conectar()->prepare("SELECT * FROM usuarios WHERE documento = ?");
                $str->bindParam(1,$documento,PDO::PARAM_INT);
                $str->execute();
                return $str->fetch(PDO::FETCH_OBJ);
            }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function consultaDocumentoAll($documento){
            try{
                $str = parent::conectar()->prepare("SELECT * FROM usuarios WHERE documento = ?");
                $str->bindParam(1,$documento,PDO::PARAM_INT);
                $str->execute();
                return $str->fetchAll(PDO::FETCH_OBJ);
            }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function consultaControl($id_usuario){
            try{
                $str = parent::conectar()->prepare("SELECT * FROM control_empleado WHERE fk_usuario = ?");
                $str->bindParam(1,$id_usuario,PDO::PARAM_INT);
                $str->execute();
                return $str->fetchAll(PDO::FETCH_OBJ);
            }catch(Exception $e){
                die($e->getMessage());
            }
        }
        
        public function consultaFecha($fecha){
            try{
                $str = parent::conectar()->prepare("SELECT * FROM control_empleado  INNER JOIN usuarios WHERE control_empleado.fk_usuario = usuarios.id_usuario AND fecha = '$fecha'");
                $str->execute();
                return $str->fetchAll(PDO::FETCH_OBJ);
            }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function consultaTodaFecha(){
            try{
                $str = parent::conectar()->prepare("SELECT * FROM control_empleado  INNER JOIN usuarios WHERE control_empleado.fk_usuario = usuarios.id_usuario");
                $str->execute();
                return $str->fetchAll(PDO::FETCH_OBJ);
            }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function consultaCargo(){
            try{
                $str = parent::conectar()->prepare("SELECT * FROM cargo");
                $str->execute();
                return $str->fetchAll(PDO::FETCH_OBJ);
            }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function stored($fk_rol,$fk_cargo,$fk_tipo_documento,$documento,$nombres,$apellidos,$correo,$contra,$fecha_creacion){
            try{
                $str = parent::conectar()->prepare("INSERT INTO usuarios(fk_rol, fk_cargo, fk_tipo_documento, documento, nombres, apellidos, correo, contra,fecha_creacion) VALUES($fk_rol,$fk_cargo,$fk_tipo_documento,$documento,'$nombres','$apellidos','$correo','$contra','$fecha_creacion')");
                $str->execute();
            }catch(Exception $e){
                die($e->getMessage());
            }
        }
    }
?>