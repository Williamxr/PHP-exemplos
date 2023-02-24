<?php

  $pessoas = array();

  array_push($pessoas, array(
    "nome"=>"Will",
    "idade"=>30
  ));

  array_push($pessoas, array(
    "nome"=>"Renata",
    "idade"=>24
  ));

  echo json_encode($pessoas);

?>