<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
         $faveFood = ["Adobo", "Banana", "Sisig"];
         echo $faveFood[1]; // outputting one single item in array

         $faveFood[] = "Orange"; // put item on array

         $faveFood[1] = "Chicken"; // change item on array by putting their assigned index
         echo $faveFood[1];
         echo '<br>';
         echo '<hr>';

        $Fruits = ["Apple", "Orange", "Grapes"];
        foreach($Fruits as $f){
            echo $f . "<br>";
        }
    ?>
</body>
</html>