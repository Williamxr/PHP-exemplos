<?php

  abstract class Animal {
    public function falar(){
      return "Som";
    }

    public function mover(){
      return "Anda";
    }
  }

  class Cachorro extends Animal{
    public function falar(){
      return "Late";
    }
  }

  class Gato extends Animal{
    public function falar(){
      return "Mia";
    }
  }

  class Passaro extends Animal{
    public function falar(){
      return "Canta";
    }

    public function mover(){
      return "Voa e " . parent::mover();
    }
  }

  $irelia = new Gato();
  echo $irelia -> falar() . "<br>";

  echo "-----------<br>";

  $pluto = new Cachorro();
  echo $pluto -> falar() . "<br>";
  echo $pluto -> mover() . "<br>";

  echo "-----------<br>";

  $canario = new Passaro;
  echo $canario -> mover();
?>