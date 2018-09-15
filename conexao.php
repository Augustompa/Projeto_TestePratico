<?php

$servidor = "tcp:serverbdtestepratico.database.windows.net,1433";
$usuario = "augustompa";
$senha = "Augustoa08u90";
$dbname = "Bd_testepratico";


// Criar conexão

$conn = sqlsrv_connect($servidor,$usuario,$senha,$dbname);
?>