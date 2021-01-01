<?php

require_once("config.php");

echo session_save_path();

var_dump(session_status());

switch(session_status()) {
  case PHP_SESSION_DISABLED:
    echo "Sessões desabilitadas";
  break;
  case PHP_SESSION_NONE:
    echo "Sessões habilitadas, mas nenhuma existir";
  break;
  case PHP_SESSION_ACTIVE:
    echo "Sessões habilitadas, e uma existir";
  break;

}

?>