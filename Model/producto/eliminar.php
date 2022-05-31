<html>
    <body>
    <?php
    include '../../Controller/conexion.php';
    if(isset($_GET["id"])){
        $id=$_GET["id"];
        $sql = $mysqli->query("DELETE FROM producto WHERE serie='".$id."';");
        ?>
            <script language="javascript"> window.alert("Eliminación del Producto Correcta!.."); window.location.href='eliminar.php'</script>
        <?php
    }
?>
<form>
<link rel='stylesheet' href="../../View/css/producto.css">
    <div class="con">
       <header class="head-form">
          <h2>Producto</h2>
       </header> 
       <div class="field-set">
        <form>
       <input class="form-input" type="text" placeholder="Nombre Producto, Marca o Numero de Serie" name="name" required>
       <td><input type ="submit" value="Buscar" ></td>
       </form>
       <br><br>

       <table class="table" >
            <thead>
                <tr>
                    <td>NOMBRE</td>
                    <td>MARCA</td>
                    <td>NUMERO-SERIE</td>
                    <td>MODELO</td>
                    <td>PRECIO</td>
                    <td>FECHA-COMPRA</td>
                    <td>CANTIDAD-PRODUCTO</td>
                    <td>CANTIDAD MINIMA</td>
                    <td>ACCION</td>
                </tr>
            </thead>
            <tbody>
                <?php 
                    if(isset($_GET["name"])){
                        $name=$_GET["name"];
                        $res = $mysqli->query("SELECT * FROM producto WHERE nombreProducto='".$name."' OR marca='".$name."' OR serie='".$name."';");
                    
                    while($fila=$res->fetch_object()){
                    ?>
                    <tr>
                        <td><?php echo $fila->nombreProducto?></td>
                        <td><?php echo $fila->marca?></td>
                        <td><?php echo $fila->serie?></td>
                        <td><?php echo $fila->modelo?></td>
                        <td><?php echo $fila->precio?></td>
                        <td><?php echo $fila->fecha?></td>
                        <td><?php echo $fila->cantidad?></td>
                        <td><?php echo $fila->cantiminima?></td>
                        <td><input type ="button" onClick="window.location.href='eliminar.php?id=<?php echo $fila->serie ?>'"value="Eliminar" ></td>
                    </tr>
                    <?php } }?>
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