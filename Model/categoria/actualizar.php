<html>
    <body>
    <?php
include '../../Controller/conexion.php';
$res = $mysqli->query("SELECT * FROM categoria");

?>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<title>Control de Bodega</title>
<meta content="" name="description">
<meta content="" name="keywords">

<!-- Favicons -->
<link href="../../View/assets/img/favicon.png" rel="icon">
<link href="../../View/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->

<!-- Template Main CSS File -->
<link href="../../View/css/eliminar.css" rel="stylesheet">

<form onSubmit="confirmar()">

<link rel='stylesheet' href="../../View/css/eliminar.css">
    <div class="con">
       <header class="head-form">
          <h2>Categoria</h2>
       </header>
       <br>
      
       <div class="field-set">
       
       <table class="table1" >
            <thead>
                <tr>
                    <td>ID</td>
                    <td>CATEGORIA</td>
                    <td>ACCION</td>
                </tr>
            </thead>
            <tbody>
                <?php while ($fila = $res->fetch_object()) {
    ?>
                    <tr>
                        <td><?php echo $fila->idCategoria ?></td>
                        <td><?php echo $fila->nombreCategoria ?></td>
                        <td><input type ="button" onClick="window.location.href='modificar.php?id=<?php echo $fila->idCategoria ?>&name=<?php echo $fila->nombreCategoria ?>'"value="Actualizar "> </td>
                        
                    </tr>
                    <?php }?>
                    
            </tbody>
            </tr>
       </table>
       <nav id="navbar" class="">

            <a class="getstarted" href="../../View/html/home.html">Regresar</a></li>
          </nav><!-- .navbar -->
 </form>
    </body>
	
</html>