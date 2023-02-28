<?php

  interface Veiculo{
    public function acelerar($velocidade);
    public function frear($velocidade);
    public function trocarMarcha($marcha);

  }

  class Audi implements Veiculo{
    public function acelerar($velocidade){
      echo "O carro acelerou até " . $velocidade . " km/h";
    }

    public function frear($velocidade){
      echo "O veículo frenou até " . $velocidade . " km/h";
    }

    public function trocarMarcha($marcha){
      echo "O veículo engatou a marcha " . $marcha;
    }
  }

  $carro = new Audi();

  $carro -> trocarMarcha(1);
  echo "<br>";
  $carro -> frear(20);
  echo "<br>";
  $carro -> acelerar(100);

?>