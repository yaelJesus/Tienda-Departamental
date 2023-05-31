<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ProductoTabla.php" method="post">
        <label for="f1">Nombre:</label>
        <input type="text" class="form-control" name="nombre" id="nombre"><br>
        <label for="f1">Cliente:</label>
        <select name="cliente" id="cliente">
            <?php
            include('conecta.php');
            $query = "SELECT * FROM cliente WHERE estatus = 1";
            $result = mysqli_query($conexion, $query);
            while($row = mysqli_fetch_assoc($result)){
                echo'
                <option value="'.$row['idCliente'].'">'.$row['nombre'].'</option>
                ';
            }
            ?>
        </select><br>
        <label for="f1">Usuario:</label>
        <select name="usuario" id="usuario">
            <?php
            include('conecta.php');
            $query = "SELECT * FROM usuario WHERE estatus = 1";
            $result = mysqli_query($conexion, $query);
            while($row = mysqli_fetch_assoc($result)){
                echo'
                <option value="'.$row['idUsuario'].'">'.$row['nombre'].'</option>
                ';
            }
            ?>
        </select><br>
        <label for="f1">Stock:</label>
        <input type="number" class="form-control" name="stock" id="stock" step="1" value="1"><br>
        <label for="f1">Precio:</label>
        <input type="text" class="form-control" name="precio" id="precio"><br>
        <label for="f1">Descripcion:</label>
        <input type="text" class="form-control" name="desc" id="desc"><br>
        <?php
        $user = $_GET['user'];
        echo"
        <input type='hidden' name='user' id='user' value='".$user."'>";
        ?>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>