<?php
require_once("../../Conexion/Conexion.php");
require_once("../../Modelo/Horario.php");
require_once("../../Controlador/Horarios.php");

if (isset($_POST["btn_nuevo"])){
    $ob= new Horarios();//INSTANCIA AL CONTROLADOR
        if($ob->abrirConexion()){
            $h=new Horario(); //INSTANCIA AL MODELO
            $h->setDescripcion($_POST["descripcion"]);
            $h->setOrden($_POST["orden"]);
            if($ob->ingresar($h)){
                header("Location: ../");

                exit();
            }
        }
}