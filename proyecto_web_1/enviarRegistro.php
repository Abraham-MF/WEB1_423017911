<?php
include "./conexion.php";
mysqli_set_charset($conexion, "utf8");

$nombre_usuario = $_POST['nombre_usuario'];
$apellido_usuario = $_POST['apellido_usuario'];
mail = $_POST['mail'];
$telefono = $_POST['telefono'];

$buscarusuario = "SELECT * FROM usuario WHERE nombre_usuario = '$nombre_usuario' and apellido_usuario ='$apellido_usuario'";
$resultado = $conexion->query($buscarusuario);
$count = mysqli_num_rows($resultado);

if ($count == 1) {
    echo "El usuario ya está registrado.";
    echo "<a href='Formulario.php'>Nuevo Registro</a>";
} else {
    $insert_query = "INSERT INTO persona (nombre_usuario, apellido_usuario, mail, telefono) VALUES ('$nombre_usuario', '$apellido_usuario', '$mail', '$telefono')";
    if (mysqli_query($conexion, $insert_query)) {
        echo "<br><h1>Usuario creado con éxito</h1>";
        echo "<a href='./Formulario.php'>Puedes generar un nuevo registro</a>";
    
