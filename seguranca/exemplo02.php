<?php

$id = (isset($_GET["id"]))?$_GET["id"]:1;

if(!is_numeric($id) || strlen($id) > 5) {
  exit("Pegamos você!");
}

$conn = mysqli_connect("localhost", "root", "", "sys");
$slq = "SELECT * FROM tb_usuarios WHERE idusuario = $id";

$exec = mysqli_query($conn, $slq);

while ($resultado = mysqli_fetch_object($exec)) {
  echo $resultado->desnome . "<br>";
}
?>