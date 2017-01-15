<?php
	require ("src/cURL.php");
	require ("src/Sunat.php");

    use Konta\Sunat;
    
    $cliente = new Sunat();
    $ruc="20601743044";
    header('Content-Type: application/json');
    echo json_encode( $cliente->BuscaDatosSunat($ruc), JSON_PRETTY_PRINT );
?>
