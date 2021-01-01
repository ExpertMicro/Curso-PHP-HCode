<?php

session_id('oi95paf5krn5qshvrbp27471gu');

require_once("config.php");


session_regenerate_id();

echo session_id();

var_dump($_SESSION);

?>