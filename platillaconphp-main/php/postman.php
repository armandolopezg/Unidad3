<?php
require ("Conexion.php");
$nombre="";
$email="";
$telefono="";
$mensaje="";
if (isset($_POST["nombre"]))
{
    $nombre=$_POST["nombre"];
}

if(isset($_POST["email"])){
    $email = $_POST["email"];
}
if(isset($_POST["telefono"])){
    $telefono = $_POST["telefono"];
}
if(isset($_POST["mensaje"])){
    $mensaje = $_POST["mensaje"];
}

$sql="INSERT INTO formulary (nombre, email, telefono, mensaje)  VALUES ('$nombre','$email','$telefono','$mensaje')";

if(mysqli_query($conn, $sql)){
    echo "New record create successfully";
} else {
    echo "Error: " .$sql. "<br>" .mysqli_error($conn);
}
?>