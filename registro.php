<?php
//Recibo datos de formulario
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
echo "Los datos son los siguientes: <br>";
echo "$nombres, $apellidos, $direccion, $telefono, $usuario, $clave";

$hostname = "10.128.0.6";
$usuariodb = "postgres";
$dbname = "registro";
try{
    $myPDO = new PDO("pgsql:host= $hostname; dbname=$dbname", $usuariodb, $passworddb);
    $sql_query = "INSERT INTO $dbname VALUES('$nombres', '$apellidos', '$direccion', '$telefono', '$usuario', '$clave')";
    $myPDO->query($sql_query);
}catch(PDOException $e){
    echo $e->getMessage();
}
?>
