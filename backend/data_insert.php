<?php

    //  copyright by https://github.com/MayankDevil
    //  developed by Mayank
    //  data_insert.php
    
    if (isset($_REQUEST["submit_btn"])) {
    
        #  include php connection file ---

        require("./connection.php");
        
        # fetch data from url ---
    
        $password = $_REQUEST["password"];
        
        $username = $_REQUEST["username"];
        
        # insert query execution ---
                
        $query = "insert into employee values("$username","$password")";
        
        $result = mysqli_query($connect,$query);
        
        if (mysqli_num_rows($result) > 0) {
        
            header("<div class='h2 text-center text-danger my-5'> Successfully (connect heart) </div>");
        
        }   else {
            
            die("<div class='h2 text-center text-danger my-5'> Error : data uninserted? </div>");
        }
        
        mysqli_close($connect);
    }
    
?>
