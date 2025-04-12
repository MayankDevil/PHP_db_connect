<?php
    /*
    -    copyright by https://github.com/MayankDevil
    -    developed by Mayank
    -    /backend/validation.php
    */
    session_start();
    
    if (isset($_REQUEST["submit_btn"])) 
    {
        require("./config.php"); #  include php connection file ---
        
        # fetch data from url ---
    
        $password = $_REQUEST["password"];
        
        $username = $_REQUEST["username"];
        
        # insert query execution ---
        
        $query = "select id from admin where username={$username} and password={$password}";
        
        $result = mysqli_query($connect,$query) or die('query unexecuted!');
        
        if (mysqli_num_rows($result) > 0) {
            
            $_SESSION['isSecure'] = $result;
        
        }   else {
            
            die("<div class='h2 text-center text-danger my-5'> Error : data uninserted? </div>");
        }
        mysqli_close($connect);
        
        header("location: /index.php");
    }
    
?>
