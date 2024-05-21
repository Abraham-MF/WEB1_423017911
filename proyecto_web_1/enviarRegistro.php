<?php
include "./conexion.php";
mysqli_set_charset($conexion, "utf8");

$nombre_usuario = $_POST['nombre_usuario'];
$apellido_usuario = $_POST['apellido_usuario'];
