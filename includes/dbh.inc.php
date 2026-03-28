<?php

$DSN = "mysql:host=localhost;dbname=myfirstdatabase;";
$DBUsername = "root";
$DBPassword = "";

try{
    $pdo = new PDO($DSN, $DBUsername, $DBPassword);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    error_log("Connection failed: " . $e->getMessage());
}
