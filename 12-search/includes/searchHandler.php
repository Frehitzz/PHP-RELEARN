<?php
if(isset($_GET['search'])){
    $userSearch = $_GET['search'];
    try{
        require_once "db.php";

        $query = "SELECT * FROM items WHERE itemName = :usersearch";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":usersearch", $userSearch);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $pdo = null;
        $stmt = null;
    }catch(PDOException $e){
        echo "Query Failed: " . $e->getMessage();
    }
}