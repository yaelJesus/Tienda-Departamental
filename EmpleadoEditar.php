<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Empleado-Editar.php" method="post">
    <label for="f1">Nombre:</label>
        <input type="text" class="form-control" name="nombre" id="nombre"><br>
        <label for="f1">Apelido Paterno:</label>
        <input type="text" class="form-control" name="paterno" id="paterno"><br>
        <label for="f1">Apellido Materno:</label>
        <input type="text" class="form-control" name="materno" id="materno"><br>
        <label for="f1">Direccion:</label>
        <input type="text" class="form-control" name="direccion" id="direccion"><br>
        <label for="f1">RFC:</label>
        <input type="text" class="form-control" name="rfc" id="rfc"><br>
        <label for="f1">Telefono:</label>
        <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="123-456-7890" class="form-control" name="tel" id="tel"><br>
        <input type="tel" class="form-control" name="ip" id="ip"><br>
        <?php
        $id = $_POST['editar'];
        $user = $_POST['user'];
        echo '
        <input type="hidden" name="id" id="id" value="'.$id.'">
        <input type="hidden" name="user" id="user" value="'.$user.'">
        ';
        ?>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>