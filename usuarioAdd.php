<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="usuarioTabla.php" method="post">
        <label for="f1">Nombre:</label>
        <input type="text" class="form-control" name="nombre" id="nombre"><br>
        <label for="f1">Apellidos:</label>
        <input type="text" class="form-control" name="aPaterno" id="aPaterno"><br>
        <label for="f1">Email:</label>
        <input type="email" class="form-control" name="email" id="email"><br>
        <label for="f1">Contraseña:</label>
        <input type="password" class="form-control" name="pass" id="pass"><br>
        <?php
        $user = $_GET['user'];
        echo"
        <input type='hidden' name='editar' value='".$user."'>";
        ?>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>