<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // STRING OPERATOR
        $firstName = "Fritz Harly";
        $givenName = "Gervacio";
        $lastName = "Degamo";

        // string concatenation
        // $fullName = $firstName." ".$givenName." ".$lastName;

        // string interpolation
        $fullName = "$firstName $givenName $lastName";
        echo $fullName;

        echo '<br>';
        echo '<hr>';


        // ARITHMETIC OPERATORS
        
        // In mathematics they solve the multiply then plus and then subtraction
        echo 1 + 2 * 4;
        echo '<br>';
        /*
            Here in php we can manipulate the order
            - bracket first then the outside
        */ 
        echo (1 + 2) * 4;
        echo '<br>';
        echo '<hr>';


        //  ASSIGNMENT OPERATOR
        $a = 5;
        $a += 10;
        /*
        $a -= 10
        $a *= 10
        */
        echo $a;
        echo '<br>';
        echo '<hr>';


        // COMPARISON OPERATOR
        /*
            == - checking if theyre equal to each other
            === - compare each other
            != - is not equal to each other
        */
        $firstNum = 10;
        $secondNum = 10;

        if($firstNum == $secondNum){
            echo 'This statement is true';
        }else{
            echo 'This statement is false';
        }

        // output: true


        /*
            LOGICAL OPERATORS

            && - checks both if both is true
            || - checks if theres only one true
        */

        $x = 20;
        $z = 43;

        $c = 12;
        $d = 14;
        
        if($x == $z && $c == $d){
            echo 'This statement is true';
        }
        echo '<br>';
        echo '<hr>';
       

        /*
            Incrementing and decrementing operator
            ++ - add 1
            -- - minus 1

        */
        $num4 = 5;
        echo $num4++; // add 1


    ?>
</body>
</html>