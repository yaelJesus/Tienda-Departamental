<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="DepartamentoTabla.php" method="post">
        <label for="f1">Nombre:</label>
        <input type="text" class="form-control" name="nombre" id="nombre"><br>
        <label for="f1">Desctipcion:</label>
        <input type="text" class="form-control" name="descripcion" id="descripcion"><br>
        <?php
        $user = $_GET['user'];
        echo"
        <input type='hidden' name='user' id='user' value='".$user."'>";
        ?>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>