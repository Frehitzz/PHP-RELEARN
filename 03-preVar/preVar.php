<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- SUPER GLOBAL - CAN ACCESS EERYWHERE IN YOUR CODE -->
    <?php
    // $_SERVER - is a PHP superglobal array that containes info. about the server env

    // returns the filePath of the root directory of the projects
    echo $_SERVER["DOCUMENT_ROOT"];

    echo '<br>';
    // returns the file path of the file where you use php self
    echo $_SERVER["PHP_SELF"];

    echo '<br>';

    // returns the server name of your project
    echo $_SERVER["SERVER_NAME"]; 

    // returns how the current HTTP request was made to the server
    // returns GET and POST
    // GET: Data is requested from the server (when you visit a page)
    // POST: Data is sent to the server (when you submit form)
    echo $_SERVER["REQUEST_METHOD"];

    // COMMON SUPERGLOBAL VARIABLES
    $_SERVER['']; // info about headers, paths, and script location
    $_GET['']; // data sent via URL query parameters (form submission)
    $_POST['']; // data semd voa http post (form submission)
    $_REQUEST['']; // combines data from get, post, and cookie
    $_FILES['']; // information about uploaded files
    $_COOKIE['']; // data stored in cookies
    $_SESSION['']; // data stored in user sessions
    $_ENV['']; // environmental variables


    ?>
</body>
</html>