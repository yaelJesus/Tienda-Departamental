<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cliente-Editar.php" method="post">
        <label for="f1">NOMBRE:</label>
        <input type="text" class="form-control" name="nombre" id="nombre"><br>
        <label for="f1">APELLIDO PATERNO:</label>
        <input type="text" class="form-control" name="aPaterno" id="aPaterno"><br>
        <label for="f1">APELLIDO MATERNO:</label>
        <input type="text" class="form-control" name="aMaterno" id="aMaterno"><br>
        <label for="f1">DIRECCION:</label>
        <input type="text" class="form-control" name="direccion" id="direccion"><br>
        <label for="f1">TELEFONO:</label>
        <input type="tel" class="form-control" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="123-456-7890" name="tel" id="tel"><br>
        <?php
        $id = $_POST['editar'];
        $user = $_POST['user'];
        echo '
        <input type="hidden" name="id" id="id" value="'.$id.'">
        <input type="hidden" name="user" id="user" value="'.$user.'">
        ';
        ?>
        <input type="submit" value="Modificar">
    </form>
</body>
</html>