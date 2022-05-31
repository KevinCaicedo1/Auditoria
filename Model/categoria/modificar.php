<html>
    <body>
    <?php
    include '../../Controller/conexion.php';
        
        if(isset($_GET["id"])){
            $id=$_GET["id"];
            $name=$_GET["name"];
            $sql = $mysqli->query("SELECT * FROM categoria WHERE idCategoria=$id;");
        }
?>
<form >
<link rel='stylesheet' href="../../View/css/registrar.css">
    <div class="con">
       <header class="head-form">
          <h2>Actualizar Categoria</h2>
       </header>
           
       <div class="field-set">
       <img src="https://cdn1.iconfinder.com/data/icons/zeir-miscellaneous-elements/32/add_new_category_menu-512.png" width="100" height="100"><br><br><br>
            <form>
            <input class="form-input" type="hidden"  name="idcat" value="<?php echo $id?>">
           <input class="form-input" title="Ingrese solo texto" pattern="[A-Za-z- -.]+" type="text"  name="nm" value="<?php echo $name?>" pattern="[A-Za-z- -.]+" title="Ingrese solo letras en este campo">
           <br> 
          <button type="submit" > Actualizar </button>
          <nav id="navbar">

<a  href="../../View/html/home.html">Regresar</a></li>
 </form>
          </form>
        

        <?php 
        
        if(isset($_GET["nm"])){
            $d=$_GET["idcat"];
            $cate=$_GET['nm'];
            $res = $mysqli->query("UPDATE categoria  SET nombreCategoria='".$cate."' WHERE idCategoria='".$d."'");
            if($cate=1){
                ?>
                <script language="javascript"> window.alert("Actualizacion de la Categoria Correcta!.."); window.location.href='actualizar.php'</script>
            <?php
            }
        }
        ?>
        </div>
    </div>
    
    
    </body>

</html>
