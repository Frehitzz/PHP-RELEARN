<?php
require_once "db.php";
    if (session_status() === PHP_SESSION_NONE){
        session_start();
    }
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $itemName = htmlspecialchars($_POST["itemName"]);
    $itemQty = htmlspecialchars($_POST["itemQty"]);
    $itemPrice = htmlspecialchars($_POST["itemPrice"]);

    try {
    // handling error logic 
    if(empty($itemName)||empty($itemQty)||empty($itemPrice)){
        $_SESSION['feedback'] = [
            'type' => 'danger',
            'text' => 'All fields must have input'
        ];
        header("Location: ../index.php");
    }else{
        $query = "INSERT INTO items (itemName, qty, price) 
        VALUES (:itemName, :qty, :price)";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":itemName", $itemName);
        $stmt->bindParam(":qty", $itemQty);
        $stmt->bindParam(":price", $itemPrice);
        $stmt->execute();

        $pdo = null;
        $stmt = null;

        // CREATING SUCCESS / ERROR MESSAGE
        $_SESSION['feedback'] = [
            'type' => 'success', // will put inside on class for bootstrap error message
            'text' => 'Added Successfully' // message that will display
        ];
        
        header("Location: ../index.php");

    }

    } catch (PDOException $e) {
        die("Query Failed:" . $e->getMessage());
    }

}else{
    header("Location: ../index.php");
}