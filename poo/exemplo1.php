<?php 

  class Pessoa{

    public $nome; //atributo

    public function falar(){ //metodo
      return "O meu nome é " . $this -> nome;
    }
  }

  $will = new Pessoa();
  $will -> nome = "Will xx";
  echo $will -> falar();

?>