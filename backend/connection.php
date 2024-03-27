<?php

    //  copyright by https://github.com/MayankDevil
    //  developed by Mayank
    //  connection.php

    $host = "sql310.infinityfree.com ";

    $username = "if0_36245670";

    $password = "";

    $database = " if0_36245670_evilcorp";
    
    # establish connection ---

    $connect = mysqli_connect($host, $username, $password, $database);
    
    if (!$connect) {
    
        die("<div class='alert alert-warning'> Unestablish Connection! </div>");
    }

?>
