<?php include ("vistaadmi.php"); ?>

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



