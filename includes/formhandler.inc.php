<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    if(empty($username) || empty($email) || empty($password)){
        exit();
    }

    try{
        require_once "dbh.inc.php";

        $query = "INSERT INTO users(username, pwd, email)
            VALUES(?, ?, ?);
        ";

        $stmt = $pdo->prepare($query);

        $stmt->execute([$username, $password, $email]);

        $pdo = null;
        $stmt = null;
        
        header("Location: ../index.php");

        die();


    }catch(PDOException $e){
        die("Query failed: " . $e->getMessage());
    }
}else{
    header("Location: ../index.php");
}