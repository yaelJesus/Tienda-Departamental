<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleado</title>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-oXuP+qFtIxf1fn1V8/YsVqGHVBfw0s4LpPpT5RNSWZkakGpC02tqzLZxU4avtVpR" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="tablasGeneral.css">
</head>
<body>
<div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="logo">
                <?php $user = $_GET['user'];
                echo'
                    <a href="home.php?user='.$user.'"><img src="https://img.freepik.com/premium-vector/loyalty-program-concept-with-people-with-giant-loyalty-card-gift-boxes-discounts-isometric_138260-967.jpg?w=2000" style="width: 200px; height: 200px;" alt="merkery_logo" class="hidden-xs hidden-sm">
                        <img src="https://img.freepik.com/premium-vector/loyalty-program-concept-with-people-with-giant-loyalty-card-gift-boxes-discounts-isometric_138260-967.jpg?w=2000" style="width: 200px; height: 200px;" alt="merkery_logo" class="visible-xs visible-sm circle-logo">
                    </a>';
                ?>
                </div>
                <div class="navi">
                    <ul>
                    <?php
                    echo '
                        <li><a href="home.php?user='.$user.'"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                        <li><a href="cliente.php?user='.$user.'"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Cliente</span></a></li>
                        <li><a href="Departamento.php?user='.$user.'"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Departamento</span></a></li>
                        <li class="active"><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Empleado</span></a></li>
                        <li><a href="Producto.php?user='.$user.'"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Producto</span></a></li>
                        <li><a href="Venta.php?user='.$user.'"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Venta</span></a></li>
                        <li><a href="usuario.php?user='.$user.'"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Usuario</span></a></li>
                        <li><a href="Reportes.php?user='.$user.'"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Reportes</span></a></li>
                    ';
                    ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
                <div class="user-dashboard">
                    <div class="container col-sm-12">
                        <div class="row">
                            <div class="col-md-11">
                                <div class="panel panel-primary">
                                    <div class="panel-heading" style="display: flex; align-items: center; flex-wrap: wrap;">
                                        <h2 class="text-center" style="flex-basis: 100%;">Empleado</h2>
                                        <div style="width: 100%;">
                                        <?php 
                                        echo "
                                            <button class='btn btn-success' type='button' onclick='window.location.href = `EmpleadoAdd.php?user=$user`' style='margin-bottom: 10px';>Agregar</button>";
                                        ?>
                                            <span class="clickable filter pull-right larger-span" data-toggle="tooltip" title="Toggle table filter" data-container="body">
                                                <i class="glyphicon glyphicon-filter larger-icon"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filter Developers" />
                                    </div>
                                    <table class="table table-hover" id="dev-table">
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Apellido Paterno</th>
                                                <th>Apellido Materno</th>
                                                <th>Direccion</th>
                                                <th>RFC</th>
                                                <th>Telefono</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                include('conecta.php');
                                                $query = "SELECT * FROM empleado WHERE estatus = 1";
                                                $result = mysqli_query($conexion, $query);
                                                while($row = mysqli_fetch_assoc($result)){
                                                    echo "
                                                    <tr class='larger-row'>
                                                        <td>".$row['nombre']."</td>
                                                        <td>".$row['apPaterno']."</td>
                                                        <td>".$row['apMaterno']."</td>
                                                        <td>".$row['direccion']."</td>
                                                        <td>".$row['rfc']."</td>
                                                        <td>".$row['telefono']."</td>
                                                        <td>
                                                            <form action='EmpleadoEditar.php' method='post'>
                                                                <input type='hidden' name='editar' id='editar' value='".$row['idEmpleado']."'>
                                                                <input type='hidden' name='user' id='user' value='".$user."'>
                                                                <button class='btn btn-link' title='Editar campo'>
                                                                    <i class='bi bi-pencil-square icon-large'></i>
                                                                </button>
                                                            </form>
                                                        </td>
                                                        <td>
                                                            <form action='EmpleadoEliminar.php' method='post'>
                                                                <input type='hidden' name='borrar' value='".$row['idEmpleado']."'>
                                                                <input type='hidden' name='user' id='user' value='".$user."'>
                                                                <button class='btn btn-link' title='Eliminar campo'>
                                                                    <i class='bi bi-trash icon-large text-danger'></i>
                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    ";
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <a href="Empleado-pdf.php">Exportar PDF</a>
                        <b>|</b>
                        <a href="Empleado-excel.php">Exportar EXCEL</a>
                        <b>|</b>
                        <a href="Empleado-csv.php">Exportar CSV</a>
                        <b>|</b>
                        <a href="Empleado-json.php">Exportar JSON</a>
                        <b>|</b>
                        <a href="Empleado-xsl.php">Exportar XML</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="tablasGeneral.js"></script>
</body>
</html>
