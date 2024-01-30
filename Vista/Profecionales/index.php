<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document_profecional</title>
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
    <h1>Profecionales</h1>
    <a href="frameIngresar.php">
        Nuevo Profecional
    </a>
    <hr>
    <table>
        <thead>
            <tr>
                <th>Acciones</th>
                <th>ID</th>
                <th>Apellido</th>
                <th>Nombre</th>
                <th>Matricula</th>
                <th>Titulo Profesional</th>
                <th>Email</th>
                <th>Celular</th>
                <th>Foto</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once("../../Conexion/Conexion.php");
            require_once("../../Controlador/profesionales.php");
            require_once("../../Modelo/Profesional.php");
            $ob_profesional = new Profesionales();
            if($ob_profesional->abrirConexion()){
                $rs = $ob_profesional->listar("SELECT * FROM Profesionales ORDER BY Orden asc");
                //rs_resultado
                foreach($rs as $key=>$value){
                    echo"<tr>";
                    echo"<td><a href='frmEditar.php? id=".$value->getId()."'> Editar </a> </td>";
                    echo"<td>".$value->getId()."</td>";
                    echo"<td>".$value->getApellido()."</td>";
                    echo"<td>".$value->getNombre()."</td>";
                    echo"<td>".$value->getMatricula()."</td>";
                    echo"<td>".$value->getTitulo_profesional()."</td>";
                    echo"<td>".$value->getEmail()."</td>";
                    echo"<td>".$value->getCelular()."</td>";
                    echo"<td>".$value->getFoto()."</td>";
                    echo"<td>".$value->getEstado()."</td>";
                    echo"</tr>";
                }
                $ob_profesional->cerrarConexion();
                }else{echo"ERROR!";}

            ?>
        </tbody>
        </table>
</body>
</html>