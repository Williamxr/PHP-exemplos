<?php

  class Pessoa {
    public $nome = 'Bruno Ks Ortiz';
    protected $idade = 80;
    private $senha = '123123';

    public function verDados(){
      echo $this -> nome . '<br/>';
      echo $this -> idade . '<br/>';
      echo $this ->  senha . '<br/>';
    }
  }

  class Programador extends Pessoa{
    public function verDados(){
      echo get_class($this) . '<br>';

      echo $this -> nome . '<br/>';
      echo $this -> idade . '<br/>';
      echo $this ->  senha . '<br/>';
    }
  }

  $objeto = new Programador();

  echo $objeto -> nome. '<br>';
  //echo $objeto -> idade. '<br>';

  $objeto -> verDados();

?>