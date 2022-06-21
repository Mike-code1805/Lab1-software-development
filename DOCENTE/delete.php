<?php

include("conexion.php");
$con=conectar();

$cod_docente=$_GET['id'];

$sql="DELETE FROM docente  WHERE cod_docente='$cod_docente'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: docente.php");
    }
?>
