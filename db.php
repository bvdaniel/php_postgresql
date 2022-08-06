<?php
//Configuracion necesaria para acceder a la base de datos.
function conn(){
    $hostname = "localhost";
    $usuariodb = "root";
    $passworddb = "8a8nkh3rr";
    $dbname = "REGISTRO";

        //Genera conexión con servidor
        $conectar = mysqli_connect($hostname, $usuariodb, $passworddb, $dbname);
        return $conectar;
} 
?>