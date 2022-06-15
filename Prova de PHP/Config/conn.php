<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname ="Atividade";



try{
$connect = ("mysql:host=" . $host . "; dbname=" . "($dbname , $user , $pass)");
    
    echo "Conexão realizada";

}catch(Expection $err){

    echo "Erro na conexão";
}



?>
