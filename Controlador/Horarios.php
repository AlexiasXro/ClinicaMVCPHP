<?php // insercion en php
    class Horarios extends Conexion{

        public function listar(String $req)
        {
            $retorno = [];
            $datos = $this->query($req);

            foreach($datos as $key=>$value){

                $hora = new Horario();
                $hora->SetId($value["id"]);
                $hora->SetDescripcion($value["descripcion"]);
                $hora->SetOrden($value["orden"]);
                $retorno[]=$hora;
            }
            return $retorno;
        }

        public function ingresar(Horario $hora){
            
            $ok = false;

            try{
                $descripcion = $hora->getDescripcion();
                $orden = $hora->getOrden();
                $sql = parent::prepare("INSERT INTO horarios (descripcion, orden)  VALUES (:descripcion, :orden)");
                $sql->bindParam(":descripcion", $descripcion, PDO::PARAM_STR);
                $sql->bindParam(":orden", $orden, PDO::PARAM_INT);
                $sql->execute();
                
                $ok = true;

            }catch(PDOException $pdoex) {
                echo "Error: ".$pdoex->getMessage();
            }finally{
                return $ok;
            }

        }


    }

?>