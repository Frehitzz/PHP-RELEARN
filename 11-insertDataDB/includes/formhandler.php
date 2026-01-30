<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $userName = htmlspecialchars($_POST["username"]);
    $email = htmlspecialchars($_POST["email"]);
    $pswd = htmlspecialchars($_POST["pswd"]);

    try {
        // connection to db
        require_once "dbconnection.php";

        // PREPARED STATEMENTS WITH NAMED PARAM
        $query = "INSERT INTO users (username, pswd, email) VALUES (:username, :pswd, :email);";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":username", $userName);
        $stmt->bindParam(":pswd", $pswd);
        $stmt->bindParam(":email", $email);
        $stmt->execute();

        /*
            CLOSES THE DATABASE CONNECTION TO FREE UP RESOURCES AND ENSURE 
            IS CLOSED BEFORE THE SCRIPT ENDS
        */ 
        $pdo = null;
        $stmt = null;

        die();

    } catch (PDOException $e) {
        die("Query Failed:" . $e->getMessage());
    }

}else{
    header("Location: ../index.php");
} 