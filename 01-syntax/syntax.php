<?php
    echo 'Hello world';

    //all php you use on this file you can remove this 
?> 

<body>
    <!-- PHP/HTML Interleaving -->
    <?php if(true){ ?>
    <p>Some html true</p>
    <?php } ?>

    <!-- echoing html in php -->
    <?php
    if(true){
        echo'<h1>Hello world</h1>';
    }
    ?>
</body>