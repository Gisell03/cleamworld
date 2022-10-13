<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cleam world</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/estilostp.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/1a3d6caaee.js" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<header>
        <nav>
            <a href="inicio.php">Inicio</a>
            <a href="contenido.php">Tipo de reciclaje</a>
            <a href="producto.php">Producto</a>
            <a href="ubicacion.php">Ubicacion</a>
            <a href="Cerrar.php?cerrar=yes">Cerrar sesion <i class="fa-solid fa-arrow-right-from-bracket" style= "margin-left: 5px"></i></a>
        </nav>
        <section class="textos-header">
            <h1>Bienvenido a nuestra sesion de productos</h1>
            <h2>Productos hechos con  residuos reutilizables como lo es el plastico </h2>
            <h1>Aprovecha y llevate el tuyo.!</h1>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #fff;"></path>
            </svg></div>
    </header>





<?php
$conexion = mysqli_connect("localhost", "root", "", "base1") or
die("Problemas con la conexión");
$registros = mysqli_query($conexion, "SELECT * FROM producto") 
or die("Problemas en el select" . mysqli_error($conexion));
?>
<br>
<br>

    
<div class="container">
      <div class="row">
           <?php foreach ($registros as $produ) {?>

            <div class="col-md-3 mb-3">
                <div class="card w-100 h-100">
                                 <div class="header">
                                     <img class="card-img-top img-fluid" src="../img/<?php echo $produ['foto'] ?>" alt="Card image cap">
                                    </div> 
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo $produ['nombre']?></h4>
                                    <p class="card-text"><?php echo "$" ,number_format ( $produ['precio'] )?></p>
                                </div>
                                <div class="card-footer">
                                <center><a href="" class="boton__a-compra" >comprar <i class="fa-solid fa-cart-arrow-down" style= "margin-left: 5px" ></i></a></center>
                                    
                                </div>
                </div>
            </div>
            <?php } ?>
      </div>
</div>

<style>
    .boton__a-compra {
        display: block;
    font-family: 'Times New Roman', Times, serif;
    width: 160px;
    font-weight: 700;
    background-color: #58D68D;
    border-radius: 15px;
    height: 40px;
    margin:20px 35px;
    color: white;  
    text-decoration: none;
}

.boton__a-compra:hover {
    text-decoration: none;
    color: rgba(255, 255, 255, 1) !important;
    box-shadow: 0 4px 16px rgb(176, 229, 250);
    transition: all 0.2s ease;
    font-family:  Woodland;
}

</style>



<?php include ("../vista/pie.php"); ?> 