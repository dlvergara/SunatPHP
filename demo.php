<?php
    require ("curl.php");
    require ("sunat.php");
    $cliente = new Sunat();
    $ruc="20601743044";
    header('Content-Type: application/json');
    echo json_encode( $cliente->BuscaDatosSunat($ruc), JSON_PRETTY_PRINT );
?>
