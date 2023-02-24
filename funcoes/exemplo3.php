<?php 

  function hello($texto = "world", $periodo = "Bom dia"){
    return "Hello $texto! $periodo!<br>";
  }
  echo hello();
  echo hello("", "Boa noite");
  echo hello("will", "Boa tarde");
  echo hello("hello", "");

?>