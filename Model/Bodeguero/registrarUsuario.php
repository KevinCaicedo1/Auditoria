<?php
include '../../Controller/conexion.php';
$name = $_GET['name'];
$username = $_GET['username'];
$password = $_GET['password'];
$surname = $_GET['surname'];
$identification = $_GET['identification'];
if ($name != null) { 
    $sql = $mysqli->query("INSERT INTO cp_usuarios (usu_codigo,usu_user,usu_pass,usu_nombre,usu_apellido,usu_estado,usu_ci) VALUES ('','" . $username . "','" . $password . "','" . $name . "','" . $surname ."',". 1 .",'" . $identification . "')");
    if ($name = 1) {
        header("location:../../View/registrarUsuario.html");
    }
}else{
    header("location:../../View/registrarUsuario.html");
    echo "Error al registrar";
}
?>