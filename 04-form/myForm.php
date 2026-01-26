<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body style="background-color: gray;">
    <div class="container mb- d-flex justify-content-center align-items-center min-vh-100">
        <!-- 
        method - how we want to submit the data
        action - where we want to submit the data
        -->
        <form class="p-4 border rounded" style="width: 100%; max-width: 400px ;" action="formHandler.php" method="POST">
            
            <label class="form-label">Username:</label><br>
            <input class="form-control" id="userName" type="text" name="userName">  
            <br>
            
            <label class="form-label">Fulname:</label><br>
            <input class="form-control" id="fullName" type="text" name="fullName">
            <br>

            <label class="form-label">Age:</label><br>
            <input class="form-control" id="age" type="number" name="age">
            <br>

            <labelv>What pet you have?</label><br>
            <select class="form-select" id="petOption" name="petOption">
                <option value="">Choose pet...</option>
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
                <option value="bird">Bird</option>
            </select>

            <button class="btn btn-primary w-100 mt-5" type="submit">Submit</button>
        </form>
    </div>
       
    

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>