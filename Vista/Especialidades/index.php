<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document_especialidad</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Especialidades</h1>
    <a href="frmEspecialidad.php">
        Nueva Especialidad
    </a>
    <hr>
    <table>
        <thead>
            <tr>
                <th>Acciones</th>
                <th>ID</th>
                <th>Descripcion</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once("../../Conexion/Conexion.php");
            require_once("../../Controlador/especialidades.php");
            require_once("../../Modelo/Especialidades.php");
            $ob_especialidad = new Especialidades();
            if($ob_especialidad->abrirConexion()){
                $rs = $ob_especialidad->listar("SELECT * FROM Especialidades ORDER BY Orden asc");
                //rs_resultado
                foreach($rs as $key=>$value){
                    echo"<tr>";
                    echo"<td><a href='frmEditar.php? id=".$value->getId()."'> Editar </a> </td>";
                    echo"<td>".$value->getId()."</td>";
                    echo"<td>".$value->getDescripcion()."</td>";
                    echo"</tr>";
                }
                $ob_especialidad->cerrarConexion();
                }else{echo"ERROR!";}
            ?>
        </tbody>
</body>
</html>