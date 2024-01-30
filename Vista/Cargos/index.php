<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document_cargo</title>
</head>
<body>
    <h1>Cargos</h1>
    <a href="frmIngresarCargo.php">
        Nuevo cargo
    </a>
    <hr>
    <table>
        <thead>
            <tr>
                <th>Acciones</th>
                <th>ID</th>
                <th>descripcion</th>
            </tr>
        </thead>
        <tbody>
            <?php
            /**
            * Página de Listado de Cargos
            *
            * Esta página muestra una lista de cargos desde una base de datos.
            * Los cargos se obtienen de la tabla "Cargos" y se muestran en una tabla HTML.
            */
            require_once("../../Conexion/Conexion.php");
            require_once("../../Controlador/cargos.php");
            require_once("../../Modelo/Cargo.php");
            $ob_cargo = new Cargos();//Crea una instancia de la clase Cargos para gestionar la interacción con la base de datos.
            if($ob_cargo->abrirConexion()){

                $rs = $ob_cargo->listar("SELECT * FROM Cargos ORDER BY Orden asc");

                foreach($rs as $key=>$value){

                    echo"<tr>";
                    echo"<td><a href='frmEditarCargo.php? id=".$value->getId()."'> Editar </a> </td>";
                    echo"<td>".$value->getId()."</td>";
                    echo"<td>".$value->getDescripcion()."</td>";
                    echo"</tr>";
                }
                $ob_cargo->cerrarConexion();
                }else{echo"ERROR!";}
                //proporciona! mensaje de error más informativos y manejar las excepciones adecuadamente.

            ?>

    </tbody>

</body>
</html>