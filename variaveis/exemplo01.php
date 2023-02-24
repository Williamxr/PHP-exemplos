<?php

  $nome = "Will";
  $sobrenome = 'x';
  $nomeCompleto = $nome ." ". $sobrenome;

  echo $nomeCompleto;

  exit;

  echo $nome;
  echo "<br/>";

  unset($nome);

  if(isset($nome)){
    echo $nome;
  }

?>