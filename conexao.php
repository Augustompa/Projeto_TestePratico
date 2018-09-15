<?php
try {
    $servidor = "localhost";
    $usuario = "root";
    $senha="";
    $dbname = "bd_testepratico";
    $conn = mysqli_connect($servidor, $usuario,$senha,$dbname);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}



?>