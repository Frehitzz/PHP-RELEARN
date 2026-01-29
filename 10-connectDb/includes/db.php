<?php
$dsn = "mysql:host=localhost;dbname=users";
$db_username = "root";
$db_pswd = "";

try {
// 3 diff ways to connec to database
// - mysql connection
// - mysqli 
// - pdo - php data objects
    $pdo = new PDO($dsn, $db_username, $db_pswd);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
 