<?php

//$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN, :PASSWORD");

//$login = "Geovana";
//$password = "nerd0800";

//$stmt->bindParam(":LOGIN", $login);
//$stmt->bindParam(":PASSWORD", $password);

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

/*
$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 4;

$stmt->execute(array($id));

//$conn->rollback();

$conn->commit();

echo "Dados deletados ok";*/


?>