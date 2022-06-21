<?php
include("conexion.php");
$con=conectar();

$cod_docente=$_POST['cod_docente'];
$dni=$_POST['dni'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$departamento_academico=$_POST['departamento_academico'];


$sql="INSERT INTO docente VALUES('$cod_docente','$dni','$nombres','$apellidos', '$departamento_academico')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: docente.php");
    
}else {
}
?>