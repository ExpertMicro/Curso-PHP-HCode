<?php

function trataName ($name) {
  if(!$name) {
    throw new Exception("Nenhum nome foi informado.", 1);
  }
  echo ucfirst($name). "<br>";
}

try {
  trataName("Joao");
  trataName("");
} catch (Exception $e) {
  echo $e->getMessage();
} finally {
  echo "Executou o try";
}

?>