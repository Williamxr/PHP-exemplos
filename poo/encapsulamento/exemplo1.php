<?php

  class Pessoa {
    public $nome = 'Rasmus Lerdof';
    protected $idade = 80;
    private $senha = '123123';

    public function verDados(){
      echo $this -> nome . '<br/>';
      echo $this -> idade . '<br/>';
      echo $this ->  senha . '<br/>';
    }
  }

  $objeto = new Pessoa();

  echo $objeto -> nome. '<br>';
  //echo $objeto -> idade. '<br>';

  $objeto -> verDados();

?>