<?php

  class Carro{
    private $modelo;
    private $motor;
    private $ano;

    public function getModelo(){
      return $this -> modelo;
    }

    public function setModelo($modelo){
      $this -> modelo = $modelo;
    }

    public function getMotor():float{
      return $this -> motor;
    }

    public function setMotor($motor){
      $this -> motor = $motor;
    }

    public function getAno():int{
      return $this -> ano;
    }

    public function setano($ano){
      $this -> ano = $ano;
    }   

    public function show(){
      return array(
        "modelo" => $this -> getModelo(),
        "motor" => $this -> getMotor(),
        "ano" => $this -> getAno()
      );
    }
  }

  $audi = new Carro();
  $audi -> setModelo("Audi R8");
  $audi -> setMotor("3.0");
  $audi -> setAno("2023");

  var_dump($audi -> show());


?>