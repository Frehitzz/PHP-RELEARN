<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini-Calculator</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        /*
            FILTERING INT OR FLOAT DATA 
        */
        $firstNum = filter_input(INPUT_POST, "num1", FILTER_SANITIZE_NUMBER_FLOAT);
        $secondNum = filter_input(INPUT_POST, "num2", FILTER_SANITIZE_NUMBER_FLOAT); 
        /*
            FILTERING STRING
        */
        $operator = htmlspecialchars($_POST["operator"]);

        // --- ERROR HANDLERS ---
        $errors = false;

        if(empty($firstNum) || empty($secondNum) || empty($operator)){
            echo "<p class='calc-error'> Fill all fields</p>";
            $errors = true;
        }

        // CHECK IF THIS IS NOT A NUMBER
        if(!is_numeric($firstNum) || !is_numeric($secondNum)){
            echo "<p class='calc-error'>Only write numbers</p>";
            $errors = true;
        }

        // if no error, calculate now
        if(!$errors){
            $value = 0.0;
            switch($operator){
                case "add";
                    $value = $firstNum + $secondNum;
                    break;
                case "sub";
                    $value = $firstNum - $secondNum;
                    break;
                case "multi";
                    $value = $firstNum * $secondNum;
                    break;
                case "divide";
                    $value = $firstNum / $secondNum;
                    break;
                default: 
                    echo "<p class='calc-error'>Something went wrong</p>";
            }
        }

    }else{
        // header("Location: myCalcu.php");
    }
?>
<body>
    <div class="container d-flex flex-column justify-content-center align-items-center min-vh-100">
        <?php
            echo "<p class='fs-1'>$value</p>"
        ?>
        <form class="d-flex flex-column justify-content-center" style="width: 100%; max-width:400px;" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            <div class="mb-3 d-flex justify-content-center gap-3">
                <input class="form-control" type="number" name="num1" placeholder="Enter 1st number">
                <input class="form-control"  type="number" name="num2" placeholder="Enter 2nd number">
            </div>

            <label>Select operator:</label>
            <select class="form-select mb-3" name="operator">
                <option value="">Choose here</option>
                <option value="add">Add</option>
                <option value="sub">Subtract</option>
                <option value="multi">Multiply</option>
                <option value="divide">Divide</option>
            </select>
            <button class="btn btn-primary" type="submit">Calculate</button>
        </form>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html> 