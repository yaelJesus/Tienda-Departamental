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
    <title>Home</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">
</head>
<body>
    
    <div class="container-fluid display-table">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="logo">
                    <a href="#"><img src="https://img.freepik.com/premium-vector/loyalty-program-concept-with-people-with-giant-loyalty-card-gift-boxes-discounts-isometric_138260-967.jpg?w=2000" style="width: 200px; height: 200px;" alt="merkery_logo" class="hidden-xs hidden-sm">
                        <img src="https://img.freepik.com/premium-vector/loyalty-program-concept-with-people-with-giant-loyalty-card-gift-boxes-discounts-isometric_138260-967.jpg?w=2000" style="width: 200px; height: 200px;" alt="merkery_logo" class="visible-xs visible-sm circle-logo">
                    </a>
                </div>
                <div class="navi">
                    <ul>
                    <?php $user = $_GET['user'];
                    echo '
                    <li class="active"><a href="#"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                    <li><a href="cliente.php?user='.$user.'"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Cliente</span></a></li>
                    <li><a href="Departamento.php?user='.$user.'"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Departamento</span></a></li>
                    <li><a href="Empleado.php?user='.$user.'"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Empleado</span></a></li>
                    <li><a href="Producto.php?user='.$user.'"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Producto</span></a></li>
                    <li><a href="Venta.php?user='.$user.'"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Venta</span></a></li>
                    <li><a href="usuario.php?user='.$user.'"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Usuario</span></a></li>
                    <li><a href="Reportes.php?user='.$user.'"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Reportes</span></a></li>
                    ';
                    ?>
                    </ul>
                </div>
            </div>
           
                <div class="user-dashboard">
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<body>
<div class="container">
  <div class="row">
      <div class="col-md-12">
          <div class="text">
            <h1 class="wow wow fadeInDown" data-wow-duration="2s"">BIENVENIDO NUEVO USUARIO!</h1>
      </div>
  </div>
</div>
</div>
</section>
        <div class="col-md-4">
            <div class="box-1 wow bounceInUp center" data-wow-duration="4s" data-wow-delay="0s">
                <img src="https://i.gifer.com/origin/0a/0a213d24412a85a075511544e06b116a.gif" style="width: 700px; height: 700px;">
            </div>
        </div>
    </div>
    </div>
            
    </div>
</section>

                    


    
<script src="home.js"></script>
</body>
</html>