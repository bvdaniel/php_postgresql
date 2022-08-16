<?php
class CConexion {
//Configuracion necesaria para acceder a la base de datos.
function ConexionBD(){
    $hostname = "10.128.0.6";
    $usuariodb = "postgres";
    $passworddb = "123";
    $dbname = "registro";
    try{
                //Genera conexión con servidor
        $conn = new PDO("pgsql:host= $hostname; dbname=$dbname", $usuariodb, $passworddb);
        echo "Se conectó correctamente a la base de datos";
    }
    catch(PDOException $exp){
        echo ("No se pudo conectar, $exp");
    }
    return $conn;
} 
}
?>

