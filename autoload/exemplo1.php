<?php

function __autoload_register($nomeClasse){

  require_once("$nomeClasse.php");
}

  $carro = new Audi();
  $carro -> acelerar(80);
?>