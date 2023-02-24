<?php

  class Endereco{
    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($l, $n, $c){
      $this -> logradouro = $l;
      $this -> numero = $n;
      $this -> cidade = $c;
    }

    public function __destruct(){
      var_dump('DESTRUIR');
    }

    public function __toString(){
      return $this -> logradouro . ', ' . $this -> numero . ', ' .$this -> cidade; 
    }

  }

  $meuEndereco = new Endereco('Rua 1 de Abril', '295', 'Passo Fundo');

  //var_dump($meuEndereco);

  //unset($meuEndereco);

  echo $meuEndereco;

?>