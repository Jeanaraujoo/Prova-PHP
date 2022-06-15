<?php

include_once('../config/conn.php');

$id = 2;
$titulo = "A Bela e a fera";
$descricao = "Conto de fadas";


//prepare

$stmt = $connect->prepare("UPDATE  posts SET  titulo = :TITULO , decricao = :DESCRICAO  WHERE id =:ID ");


//troca
$stmt->bindParam(':ID' , $id);
$stmt->bindParam(':TITULO' , $titulo);
$stmt->bindParam(':DESCRICAO' , $descricao);



//executa

$stmt->execute()


?>