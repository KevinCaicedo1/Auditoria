<html>
    <body>
    <?php
    include '../../Controller/conexion.php';
    $res = $mysqli->query("SELECT * FROM categoria");
?>
<form>
<link rel='stylesheet' href="../../View/css/eliminar.css">
    <div class="con">
       <header class="head-form">
          <h2>Producto</h2>
       </header>
       <br>     
       <div class="field-set">
       <table class="table1" >
            <thead>
                <tr>
                    <td>CATEGORIA</td>
                    <td>ACCION</td>
                </tr>
            </thead>
            <tbody>
                <?php while($fila=$res->fetch_object()){
                    ?>
                    <tr>
                        <td><?php echo $fila->nombreCategoria?></td>
                        <td><input type ="button" onClick="window.location.href='agregar.php?name=<?php echo $fila->nombreCategoria?>'"value="Agregar"> </td>
                    </tr>
                    <?php } ?>
            </tbody>
            </tr>
       </table>
       <nav id="navbar" class="">

            <a class="getstarted" href="../../View/html/home.html">Regresar</a></li>
          </nav><!-- .navbar -->
 </form>
    </body>
</html>