<?php

$dbPassword = "PHPFundamentals";
$dbUsername = "PHPFundamentals";
$dbServer = "localhost";
$dbName = "PHPFundamentalsDB";

$connection = new mysqli($dbServer, $dbUsername, $dbPassword, $dbName);

if($connection->connect_errno){
    die ( "Failed to connect to the Database. Reason: ".$connection->connect_error);
}

?>