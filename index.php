<?php
    session_start();

    if (isset($_SESSION['isSecure']))
    {
        header("Location: welcome.php");
    }
?>
<!DOCTYPE html>
<!--
-   PHP_login
-   https://github.com/MayankDevil/
-   Developed by Mayank
-   HTML : ./index.php
-->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MayankDevil</title>

    <!-- bootstrap css -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-icons.min.css">

</head>

<body>

    <!-- form frame -->
    <div class="container-fluid">
        <div class="row">
        
            <div class="col"></div>

            <div class="col-5">
                
                <form action="./backend/validation.php" class="my-5 p-3">
                
                    <!-- form title -->
                    <div class="h1 pb-5"> Evil-Corp <span class="h5 text-muted"> pure employment </span> </div>
                    
                    <!-- username field for text data -->
                    <div class="form-group my-4">
                        <label for="" class="py-2"> Enter Username </label>
                        <input type="text" name="username" id="" class="form-control my-2" placeholder="mastermayank">
                        <div class="text-muted"> Only use letter don't use number or symbols </div>
                    </div>
                    <!-- password field for encoded data -->
                    <div class="form-group my-4">
                        <label for="" class="py-2"> Enter Passwrod </label>
                        <input type="password" name="password" id="" class="form-control my-2" placeholder="********">
                        <div class="text-muted"> Used number, letter, symbols for strong password </div>
                    </div>

                    <!-- button group -->
                    <div class="py-2">
                        <!-- submit button to send data -->
                        <input type="submit" name="submit_btn" value="connect" class="btn btn-outline-dark">
                        
                    </div>
                    
                    <div class="h6 pt-5 text-muted">  &copy; developed by <a href="https://github.com/MayankDevil/" class="text-decoration-none"> MayankDevil </a> </div>
                
                </form>

            </div>
            
            <div class="col"></div>

        </div> 
    </div>

    <!-- bootstrap css -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../min/js/bootstrap.bundle.min.js"></script>
    
</body>

</html>
<!-- the end -->

