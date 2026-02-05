<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<?php
    require_once "includes/searchHandler.php";
?>
<body>
     <form action="searchHere.php" method="GET">
        <div class="container min-vh-100" style="max-width: 500px;">
            <!-- SEARCH INPUT -->
            <div class="input-group p-5">
                <input class="form-control" type="text" name="search" placeholder="Search here">
                <button class="btn btn-primary border-0"><i class="bi bi-search"></i></button>
            </div>

            <!-- DISPLAY SEARCH ITEM  -->
            <div class="">
               <?php if (isset($_GET['search'])): ?>
                <?php if (empty($results)): ?>
                    <div class="text-center"><p>There are no results</p></div>
                    <?php else: ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Item Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                <tr>
                            </thead>
                            <tbody>
                                <?php foreach($results as $row): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($row["itemName"])?></td>
                                    <td><?php echo htmlspecialchars($row["qty"])?></td>
                                    <td><?php echo htmlspecialchars($row["price"])?></td>
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
            <div class="d-flex justify-content-center">
                <a href="index.php" class="btn btn-outline-secondary">Add item</a>
            </div>
        </div>
     </form>
    

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>