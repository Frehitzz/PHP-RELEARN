<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /*
            --- CONTROL STRUCTURE ---
        */
            $myBool = true;
            $num1 = 4;
            $num2 = 6;

            /*
                if(!$myBool){ // if is not true

                }
            */

            /*
                --- IF ELSE ---
                && - both must be correct to display true
                elseif - another condition, if the first condition is true it skipped the elseif
            */
            if($num1 > $num2 && $myBool){
                echo 'First Condition is True';
            }elseif ($num1 > $num2 && !$myBool){
                echo 'Second Condition is True';
            }else{
                echo 'False';
            }
            echo '<br>';
            echo '<hr>';

            /*
                --- SWITCH STATEMENT ---
            */
            switch ($num1){
                case 1:
                    echo "The first switch is correct";
                    break;
                case 2:
                    echo "The second switch is correct";
                    break;
                default:
                    echo "None of this is true";
            }
            
    ?> 
</body>
</html>