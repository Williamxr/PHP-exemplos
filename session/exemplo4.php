<?php

  session_id('suprlti8h3ifq7lo7oim0jqaoq');

  require_once("config.php");

  session_regenerate_id();
  echo session_id();

  var_dump($_SESSION);

?>