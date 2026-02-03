<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<?php
    // SAFE WAY TO START A SESSION
    if (session_status() === PHP_SESSION_NONE){
        session_start();
    }
?>
<body>
    <div class="container min-vh-100 d-flex flex-column align-items-center justify-content-center ">
        <!-- DISPLAY SUCCESS/ERROR MESSAGE HERE -->
        <?php
        // kapag meron laman ang feedback
            if(!empty($_SESSION['feedback'])){
                $msg = $_SESSION['feedback'];
                // using the 'type' on class
                echo '<div class="alert alert-'.htmlspecialchars($msg['type']) .'">' . htmlspecialchars($msg['text']) . '</div>';
unset($_SESSION['feedback']);
            }
        ?>
        <form class="d-flex flex-column gap-4" action="includes/addFormHandler.php" method="POST">
            <input class="form=control" type="text" name="itemName" placeholder="Enter item name">
            <input class="form=control" type="number" name="itemQty" placeholder="Enter item quantity">
            <input class="form=control" type="number" name="itemPrice" placeholder="Enter item price">
            <div class="d-flex flex-column align-items-center gap-2" role="group">
                <button class="btn btn-primary w-100" type="submit">Add Item</button>
                <a href="searchHere.php"><button class="btn btn-outline-secondary" type="button">Search Item</button></a>
            </div>
            
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>