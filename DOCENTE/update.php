<?php

include("conexion.php");
$con=conectar();

$cod_docente=$_POST['cod_docente'];
$dni=$_POST['dni'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$departamento_academico=$_POST['departamento_academico'];

$sql="UPDATE docente SET  dni='$dni',nombres='$nombres',apellidos='$apellidos',departamento_academico='$departamento_academico'  WHERE cod_docente='$cod_docente'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: docente.php");
    }
?>