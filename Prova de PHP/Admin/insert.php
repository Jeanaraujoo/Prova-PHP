<?php


include_once('../config/conn.php');

$titulo=$_POST['titulo'];
$descricao=$_POST['descricao'];



//preparar

$stmt = $connect-> prepare("INSERT INTO posts (titulo,descricao) VALUES (:TITULO , :DESCRICAO)" );


//trocar

$stmt->bindParam(':TITULO' , $titulo);
$stmt ->bindParam(':DESCRICAO' , $descricao);

//executar

$stmt->execute();



?>