<html>
    <body>
    <?php
    include '../../Controller/conexion.php';
        
        if(isset($_GET["id"])){
            $id1=$_GET["id"];
            $namepro1=$_GET["nombre"];
            $marca1=$_GET["marca"];
            $modelo1=$_GET["modelo"];
            $precio1=$_GET["precio"];
            $fecha1=$_GET["fecha"];
            $cantidad1=$_GET["cant"];
            $cantmin1=$_GET["cantmin"];
            $sql = $mysqli->query("SELECT * FROM producto WHERE serie=$id1;");
        }
    ?>
<form>
<link rel='stylesheet' href="../../View/css/registrar.css">
    <div class="con">
       <header class="head-form">
          <h2>Producto</h2>
       </header>
       <br>     
       <div class="field-set">
       <img src="https://cdn1.iconfinder.com/data/icons/zeir-miscellaneous-elements/32/add_new_category_menu-512.png" width="100" height="100"><br><br><br>
            <form>
            <label >Nombre:</label>
            <input class="form-input" title="Ingrese solo texto" pattern="[A-Za-z- -.]+" type="text" name="namepro" value="<?php echo $namepro1?>">     
            <br><label >Marca:</label>
            <input class="form-input" title="Ingrese solo texto" pattern="[A-Za-z- -.]+" type="text"  name="marca1" value="<?php echo $marca1?>">
            <input class="form-input" type="hidden"  name="ser" value="<?php echo $id1?>">
            <br>
            <label >Modelo:</label>
            <input class="form-input" type="text"  name="modelo1" value="<?php echo $modelo1?>">
            <br>
            <label >Precio:</label>
            <input class="form-input" tittle="Ingrese solo numeros" pattern="[0-9- -.]+" type="text"  name="preciocompra" value="<?php echo $precio1?>">
            <input class="form-input" type="hidden" name="fecha" value="<?php echo $fecha1?>">
            <input class="form-input" type="hidden"  name="cantidad" value="<?php echo $cantidad1?>">
            <br><label >Cantidad Minima:</label>
            <input class="form-input" type="number" placeholder="Cantidad Minima" name="cantminima" min="1" value="<?php echo $cantmin1?>">
           <br> 
          <button type="submit"> Actualizar </button>
          <nav id="navbar" class="">

<a class="getstarted" href="../../View/html/home.html">Regresar</a></li>
    </nav>
          </form>
        
            <?php 
            
            if(isset($_GET["namepro"])){
                $namepro=$_GET['namepro'];
                $marca=$_GET['marca1'];
                $serie=$_GET['ser'];
                $modelo=$_GET['modelo1'];
                $precio=$_GET['preciocompra'];
                $cantmin=$_GET['cantminima'];
                    $res = $mysqli->query("UPDATE producto SET nombreProducto='".$namepro."',marca='".$marca."',modelo='".$modelo."',precio='".$precio."',cantiminima='".$cantmin."' WHERE serie='".$serie."'");
                    if($namepro=1){
                        ?>
                        <script language="javascript"> window.alert("Actualizacion del Producto Correcta!.."); window.location.href='actualizar.php'</script>
                    <?php
                        
                    }
            }
            ?>
       </div>
    </div>
 </form>
    
    </body>
</html>
