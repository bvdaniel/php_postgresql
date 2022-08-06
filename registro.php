<?php
include_once('db.php');
//Recibo datos de formulario
$nombres=$_POST['nombres'];
$apellidos=$_POST['apelllidos'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
echo "Los datos son los siguientes: <br>";
echo "$nombres, $apellidos, $direccion, $telefono, $usuario, $clave";

    $conectar=conn();
    $sql="INSERT INTO REGISTRO
    VALUES('$nombres', '$apellidos', '$direccion', '$telefono', '$usuario', '$clave')";
    $result = mysqli_query($conectar, $sql)or trigger_error("Query FAIled! SQL- Error".mysqli_error($conectar));
    echo "$sql";
?>