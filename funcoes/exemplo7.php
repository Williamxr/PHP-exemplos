<?php 

  function soma(int ...$valores){
    return array_sum($valores);
  }
  echo soma(2,2);
  echo "<br>";
  echo soma(5,5);
  echo "<br>";
  echo soma(2.2,2.9);
  echo "<br>";
?>