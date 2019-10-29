<?php
    class Empleado extends DB{
        public function consultaEmpleados(){
            try{
                $str = parent::conectar()->prepare("SELECT * FROM usuarios");
                $str->execute();
                return $str->fetchAll(PDO::FETCH_OBJ);
            }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function consultaEmpleado(){
            try{
                $str = parent::conectar()->prepare("SELECT * FROM usuarios");
                $str->execute();
                return $str->fetch(PDO::FETCH_OBJ);
            }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function consultaCantidadEmpleados($documento){
            try{
                $str = parent::conectar()->prepare("SELECT COUNT(*) documento FROM usuarios WHERE documento = $documento");
                $str->execute();
                return $str->fetch(PDO::FETCH_OBJ);
            }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function consultaRegistroEmpleado($fk_usuario){
            try{
                $str = parent::conectar()->prepare("SELECT * FROM control_empleado WHERE fk_usuario = $fk_usuario");
                $str->execute();
                return $str->fetch(PDO::FETCH_OBJ);
            }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function consultaTodoRegistroEmpleado($fk_usuario){
            try{
                $str = parent::conectar()->prepare("SELECT * FROM control_empleado WHERE fk_usuario = $fk_usuario");
                $str->execute();
                return $str->fetchall(PDO::FETCH_OBJ);
            }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function registroEnter($fk_usuario, $fecha, $hora_entrada){
            try{
                $str = parent::conectar()->prepare("INSERT INTO control_empleado(fk_usuario, fecha, hora_entrada) VALUES($fk_usuario, '$fecha', '$hora_entrada')");
                $str->execute();
            }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function registroExit($hora_salida, $fecha, $fk_usuario){
            try{
                $str = parent::conectar()->prepare("UPDATE control_empleado SET hora_salida = '$hora_salida' WHERE fecha = '$fecha' AND fk_usuario = $fk_usuario ");
                $str->execute();
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

        
    }       
?>