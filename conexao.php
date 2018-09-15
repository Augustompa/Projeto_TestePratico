<?php
try {
    $conn = new PDO("sqlsrv:server = tcp:serverbdtestepratico.database.windows.net,1433; Database = Bd_testepratico", "augustompa", "{your_password_here}");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "augustompa@serverbdtestepratico", "pwd" => "{your_password_here}", "Database" => "Bd_testepratico", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:serverbdtestepratico.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>