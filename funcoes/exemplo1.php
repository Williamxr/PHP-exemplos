<?php 

  function hello(){
    echo "Hello Word! <br>";
  }
  hello();

  function ola(){
    return "Olá mundo!"; 
  }
  echo ola();
  $frase = ola();
  echo strlen($frase);

?>