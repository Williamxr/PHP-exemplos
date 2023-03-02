<?php

  $con = new PDO('mysql:dbname=dbphp7;host=localhost', 'root', '');

  $stmt = $con -> prepare('SELECT * FROM tb_usuarios ORDER BY deslogin');

  $stmt -> execute();

  $result = $stmt -> fetchAll();

  foreach($result as $row){
    foreach ($row as $key => $value) {
      echo '<strong>'.$key.':</strong>' . $value . '<br>';
    }
    echo '-----------------------------------<br>';
  }

?>