<html>
    <body>
    <?php
     include '../../Controller/conexion.php';      
        if(isset($_GET["name"])){
            $name=$_GET["name"];
        }
?>
 <script>
         
	 function validarfecha(){
		 var fecha=document.getElementById("fecha");
		 var fechahoy= new Date();
		 var fechahoystr = fechahoy.toISOString();
		 fechahoystr = fechahoystr.slice(0,10);
		 if(fecha.value>fechahoystr){
			 window.alert("La fecha no puede ser mayor a la Fecha Actual");
			 return false;
		 }
		 return true;
	 }
    function alerta(){
        window.alert('Categoria Guardada');
    }
</script>
<form onSubmit="return validarfecha()" method="GET">
<link rel='stylesheet' href="../../View/css/registrar.css">
    <div class="con">
       <header class="head-form">
          <h2>Producto</h2>
       </header>
       <br>     
       <div class="field-set">
       <img src="https://cdn1.iconfinder.com/data/icons/zeir-miscellaneous-elements/32/add_new_category_menu-512.png" width="100" height="100"><br><br><br>
            <form>
            <input class="form-input" title="Ingrese solo texto" type="text" placeholder="Nombre Producto" name="namepro"  required>     
            <input class="form-input" title="Ingrese solo texto" pattern="[A-Za-z- -.]+"type="text" placeholder="Marca" name="marca" required>
            <input class="form-input" type="text" placeholder="Numero de Serie" name="serie" required>
            <input class="form-input" type="text" placeholder="Modelo" name="modelo" required>
            <input class="form-input" title="Ingrese solo numeros" pattern="[0-9- -.]+" type="text" placeholder="Precio de Compra" name="preciocompra" required>
            <input class="form-input" type="date" name="fecha" id="fecha" required>
            <input class="form-input" type="number" placeholder="CantidadProducto" name="cantidad" min="0"  required>
            <input class="form-input" type="number" placeholder="Cantidad Minima" name="cantminima" min="1"  required>
           <input class="form-input" type="hidden"  name="name" value="<?php echo $name?>">
				
           <br> 
          <button  > Guardar </button>
          </form>
          <nav id="navbar" class="">
            
    <a class="getstarted" href="./producto.php">Regresar</a></li>
    </nav><!-- .navbar -->
         
        <?php 
        
        if(isset($_GET["name"])&& isset($_GET["namepro"])){
            $cate=$_GET['name'];
            $namepro=$_GET['namepro'];
            $marca=$_GET['marca'];
            $serie=$_GET['serie'];
            $modelo=$_GET['modelo'];
            $precio=$_GET['preciocompra'];
            $fecha=$_GET['fecha'];
            $cantidad=$_GET['cantidad'];
            $cantmin=$_GET['cantminima'];
            $producto=$mysqli->query("SELECT * FROM producto WHERE serie='".$serie."';");
                if( mysqli_num_rows($producto)!=0){
            ?>
                <script language="javascript"> alert("El numero de Serie del Producto ya existe")</script>
            <?php
            }else{
                if($namepro!=null||$marca!=null||$serie!=null||$modelo!=null||$precio!=null||$fecha!=null||$cantidad!=null||$cantmin!=null){
                    $Rres = $mysqli->query("INSERT INTO producto (nombreProducto,marca,serie,modelo,precio,fecha,cantidad,cantiminima,tipo) VALUES ('".$namepro."','".$marca."','".$serie."','".$modelo."','".$precio."','".$fecha."','".$cantidad."','".$cantmin."','".$cate."')");
                    ?>
                        <script language="javascript"> alert("Producto Guardado!..")</script>
                    <?php
                }
            }
        }
        ?>
        </div>
    </div>
 </form>

    </body>
</html>

      