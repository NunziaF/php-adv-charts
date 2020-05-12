<?php

  // return json da prompt PHP
  header('Content-Type: application/json');

  require_once 'db.php';

  $newData = $graphs["fatturato"];

  echo json_encode($newData);
 ?>
