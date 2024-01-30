<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        .boton {
        display: inline-block;
        padding: 10px 20px; /* Ajusta el espaciado interno según tus preferencias */
        background-color: #0074e4; /* Color de fondo del botón */
        color: #fff; /* Color del texto */
        text-decoration: none; /* Quita el subrayado de los enlaces */
        border-radius: 5px; /* Añade esquinas redondeadas */
        font-weight: bold; /* Texto en negrita */
        border: none; /* Quita el borde */
        cursor: pointer; /* Cambia el cursor al pasar el mouse */
        }

        .boton:hover {
            background-color: #005bac; /* Cambia el color de fondo al pasar el mouse */
        }
    </style>
</head>
<body>
    <h1>Horarios</h1>
    <a href="frmIngresar.php" class="boton">
        Nuevo Horario
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
            * Página de Listado de Horarios
            *
            * Esta página muestra una lista de horarios desde una base de datos.
            * Los horarios se obtienen de la tabla "Horarios" y se muestran en una tabla HTML.
            *
            * @author [Estudiantes]
            * @version ni idea ->indica la versión de la página, puedes ajustarla a tu sistema de control de versiones.
            * @date [01/11/2023]
            */


                //Incluye archivos PHP necesarios para la funcionalidad.
                require_once("../../Conexion/Conexion.php");
                require_once("../../Controlador/horarios.php");
                require_once("../../Modelo/Horario.php");
                $ob_horario = new Horarios();//Crea una instancia de la clase Horarios para gestionar la interacción con la base de datos.
                if($ob_horario->abrirConexion()){
                // Realiza una consulta a la base de datos y obtiene los resultados
                    $rs = $ob_horario->listar("SELECT * FROM Horarios ORDER BY Orden asc");


                // Itera a través de los resultados y muestra cada horario en una fila de la tabla
                    foreach($rs as $key=>$value){
                        //Imprime HTML y datos dinámicos en la página.
                        echo"<tr>";
                        echo"<td><a href='frmEditar.php? id=".$value->getId()."'> Editar </a> </td>";
                        echo"<td>".$value->getId()."</td>";
                        echo"<td>".$value->getDescripcion()."</td>";
                        echo"</tr>";
                    }

                    $ob_horario->cerrarConexion();
                }else{echo"ERROR!";}
                //proporciona ! mensaje de error más informativos y manejar las excepciones adecuadamente.

            ?>
        </tbody>
    </table>
</body>
</html>