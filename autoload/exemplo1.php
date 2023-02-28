<?php

function __autoload($nomeClasse){

  require_once("$nomeClasse.php");
}

  $carro = new Audi();
  $carro -> acelerar(80);
?>