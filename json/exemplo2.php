<?php

  $json = '[{"nome":"Will","idade":30},{"nome":"Renata","idade":24}]';

  $data = json_decode($json, true);
  var_dump($data);

?>