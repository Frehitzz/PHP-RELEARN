<?php

$dsn = "mysql:host=localhost;dbname=testlogin";
$db_username = "root";
$db_pswd = "";

try {
    $pdo = new PDO($dsn,$db_username,$db_pswd);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "Connection Failed: ". $e->getMessage();
}

