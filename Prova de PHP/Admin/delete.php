<?php

include_once('../config/conn.php');



$stmt = $connect->prepare("DELETE FROM posts WHERE id = :id");

$id = 3;


$stmt-> bindParam(":ID" , $id);


$stmt->execute();
echo "usuario deletado";



?>