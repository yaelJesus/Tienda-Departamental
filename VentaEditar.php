<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Venta-Editar.php" method="post">
        <label for="f1">Fecha:</label>
        <input type="date" class="form-control" name="fecha" id="fecha"><br>
        <label for="f1">Total:</label>
        <input type="text" class="form-control" name="total" id="total"><br>
        <label for="f1">Empleado:</label>
        <select name="empleado" id="empleado">
            <?php
            include('conecta.php');
            $query = "SELECT * FROM empleado WHERE estatus = 1";
            $result = mysqli_query($conexion, $query);
            while($row = mysqli_fetch_assoc($result)){
                echo'
                <option value="'.$row['idEmpleado'].'">'.$row['nombre'].'</option>
                ';
            }
            ?>
        </select><br>
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