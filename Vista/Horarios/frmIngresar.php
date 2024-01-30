<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="preparar.php" method="POST">
        <label for="id">Identificador</label>
        <input type="number" readonly name="id" value="0">
        <br>
        <label for="descripcion">Descripcion</label>
        <input type="text" name="descripcion" value="">
        <br>
        <label for="orden">Orden</label>
        <input type="number" name="orden" min="1" value="1">
        <br>
        <input type="submit" name="btn_nuevo" value="Guardar">

    </form>
    
</body>
</html>
