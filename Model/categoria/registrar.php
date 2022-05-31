<?php
include '../../Controller/conexion.php';
$name = $_GET['name'];
$res = $mysqli->query("SELECT * FROM categoria WHERE nombreCategoria='" . $name . "';");
if ($res->num_rows == 0) {
    if ($name != null) {
        $sql = $mysqli->query("INSERT INTO categoria (idCategoria, nombreCategoria) VALUES ('','" . $name . "')");
        if ($name = 1) {
            header("location:../../View/registrar.html");
        }
    }
} else {
    header("location:../../View/registrar.html");
}
