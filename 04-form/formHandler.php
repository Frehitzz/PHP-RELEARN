<?php

// if the user request this page equal to post then let the user go in
if ($_SERVER["REQUEST_METHOD"] == "POST"){

/*
   === you need to always sanitize data that the user submit ===

    htmlspeacialchars() - sanitize the data that the user put
    $_POST[""] - get the value of the input 'name' on input
    (int) $_POST[""] - to ensure only int data will get
*/
    $userName = htmlspecialchars($_POST["userName"]); 
    $fullName = htmlspecialchars($_POST["fullName"]);
    $age = (int) $_POST["age"];
    $petOption = htmlspecialchars($_POST["petOption"]);

    // if theres one input field empty the user cant proceed
    if (empty($userName) || empty($fullName) || empty($age) || empty($petOption)){
        header("Location: myForm.php");
        exit();
    }

    echo "These are the data, that the user submitted:";
    echo "<br>";
    echo "username: $userName";
    echo "<br>";
    echo "fullName: $fullName";
    echo "<br>";
    echo "age: $age";
    echo "<br>";
    echo "Favourite pet: $petOption";

}
// IF THE USER GET ON THIS FILE WITHOUT USING POST THEN LET THEM GO BACK
else{
    // file path to go back to form
    header("Location: myForm.php");
}

