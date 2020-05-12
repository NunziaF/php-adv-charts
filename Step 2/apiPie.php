
<?php

  header('Content-Type: application/json');

  require_once 'db.php';

  $newData = $graphs["fatturato_by_agent"];

  $agenti = [];
  $venditeTotali = [];
  foreach ($newData["data"] as $agente => $vendite) {
   $agenti[] = $agente;
   $venditeTotali[] = $vendite;
  }

  $grafico = [
   'tipoGrafico' => $newData["type"],
   'agenti' => $agenti,
   'venditeTotali' => $venditeTotali
  ];

  echo json_encode($grafico);
?>
