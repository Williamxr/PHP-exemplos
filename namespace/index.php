<?php

  require_once('config.php');

  use Cliente\Cadastro;

  $cad = new Cadastro();

  $cad -> setNome('Will x');
  $cad -> setEmail('Will@gmail.com');
  $cad -> setSenha('123123');

  $cad -> registrarVenda();

?>