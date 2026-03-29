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

        $query = "UPDATE users SET username = :username, pwd = :pwd, email = :email
            WHERE email = :email;
        ";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":pwd", $pwd);
        $stmt->bindParam(":email", $email);
        
        $stmt->execute();

        $pdo = null;
        $stmt = null;

        header("Location: ../index.php");

        die();
    }catch(PDOException $e){
        error_log('Request failed: ' . $e->getMessage());
    }

}else{
    header("Location: ../index.php");
}