<?php

  $nome = 'will';

  function teste(){
    global $nome;
    echo $nome;
  }

  function teste2(){
    $nome = 'renata';
    echo $nome . ' teste 2';
  }

  teste();
  teste2();

?>