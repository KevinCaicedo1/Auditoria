<html>
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



<!-- Template Main CSS File -->
<link href="../../View/assets/css/style.css" rel="stylesheet">
    <body>
    <?php
    include '../../Controller/conexion.php';
    if(isset($_GET["id"])){
        $id=$_GET["id"];
        $sql = $mysqli->query("DELETE FROM categoria WHERE idCategoria=$id;");
        ?>
            <script language="javascript"> window.alert("Eliminación del Producto Correcta!.."); window.location.href='eliminar.php'</script>
        <?php
    }
    $res = $mysqli->query("SELECT * FROM categoria");
?>

<form>
<link rel='stylesheet' href="../../View/css/eliminar.css">
    <div class="con">
       <header class="head-form">
          <h2>Categoria</h2>
       </header>
          
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
                <?php while($fila=$res->fetch_object()){
                    ?>
                    <tr>
                        <td><?php echo $fila->idCategoria?></td>
                        <td><?php echo $fila->nombreCategoria?></td>
                        <td><input type ="button" onClick="window.location.href='eliminar.php?id=<?php echo $fila->idCategoria ?>'"value="Eliminar" ></td>
                    </tr>
                    <?php } ?>
            </tbody>
            </tr>
       </table>
       <nav id="navbar" class="">

<a class="getstarted" href="../../View/html/home.html">Regresar</a></li>
</nav><!-- .navbar -->
       </div>
    </div>
 </form>
    
    </body>
</html>
