<?php
include "./conexion.php";
mysqli_set_charset($conexion, "utf8");

$nombre_usuario = $_POST['nombre_usuario'];
$apellido_usuario = $_POST['apellido_usuario'];
mail = $_POST['mail'];
$telefono = $_POST['telefono'];

$buscarusuario = "SELECT * FROM usuario WHERE nombre_usuario = '$nombre_usuario' and apellido_usuario ='$apellido_usuario'";
