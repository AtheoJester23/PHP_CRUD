<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $username = $_POST["username"];
    $pwd = $_POST["password"];

    if(empty($username) || empty($pwd)){
        exit();
    }

    try{
        require_once "dbh.inc.php";

        $query = "DELETE FROM users WHERE username = :username AND pwd = :pwd";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":pwd", $pwd);

        $stmt->execute();

        $pdo = null;
        $stmt = null;

        header("Location: ../index.php");

        die();

    }catch(PDOException $e){
        error_log('Query failed: ' . $e->getMessage());
    }
}else{
    header("Location: ../index.php");
}