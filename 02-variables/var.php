<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 2 types of outputting  -->
     <p>This is only HTML paragraph</p>
     <?php echo"This is HTML & PHP paragraph";?>
    <hr>

    <?php
    // to declare var use '$'
        $fName = "Fritz Harly";
        $mName = "Gervacio";
        $lName = "Degamo";

        // string concatenation
        $fullName1 = $fName. " ". $mName ." ".$lName;
        // string interpolation
        $fullName2 = "$fName $mName $lName";
        echo 'String Concatenation: '. $fullName1; // outputting a var value with text on it using concat
        echo '<br>';
        echo "String Interpolation: $fullName2"; // outputting a var value with text on it using interpolation
    ?>
    <!-- YOU CAN ALSO OUTPUT THE VAR VALUE LIKE THIS ON HTML -->
    <p>Hi, my First Name is <?php echo $fName; ?> and my middle name are <?php echo $mName; ?> and my Family name is <?php echo $lName;?>
</p>

    <?php
    // SCALAR DATA TYPES (contain 1 value)
    $string = "Hello world";
    $myNum = 67;
    $myFloat = 67.67;
    $bool = true;

    // YOU CAN ASSIGN EMPTY VAR but declare the default
    $emptyVar;
    $emptyVar2 = 0; // best to use this method

    // ARRAY TYPE
    $emptyArray = [];
    $myPets1 = ["Saber", "Mikay", "Aki"];

    // OBJECT TYPE
    // $myObject = null;
    // $myObject = new Car();


    ?>

</body>
</html>