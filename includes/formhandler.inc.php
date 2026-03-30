<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $username = $_POST["username"];
    $pwd = $_POST["password"];
    $email = $_POST["email"];

    if(empty($username) || empty($pwd) || empty($email)){
        exit();
    }

    try{
        require_once "dbh.inc.php";

        $query = "INSERT INTO users (username, pwd, email)
            VALUES(?, ?, ?)
        ";

        $stmt = $pdo->prepare($query);

        $options = [
            'cost'=>12
        ];

        $hashedPwd = password_hash($pwd, PASSWORD_BCRYPT, $options);
        

        $stmt->execute([$username, $hashedPwd, $email]);

        $pdo = null;
        $stmt = null;

        header("Location: ../index.php");

        die();
    }catch(PDOException $e){
        error_log("Failed to create account: " . $e->getMessage());
    };
}else{
    header("Location: ../index.php");
}

