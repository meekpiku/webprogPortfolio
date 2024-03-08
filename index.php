<?php

session_start();
session_destroy();
session_start();
require_once('config.php');
?>
<!DOCTYPE html
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="register.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </head>
    <body>
        
        <div class="login-container">
            <div class="title-container">
                <i class="fa-solid fa-star"></i>
                        <h1>Sign-in</h1>
            </div>
            <div class="login-body-container">
            <?php
            if (isset($_POST["submit"])) {
                $email = $_POST["email"];
                $password = $_POST["password"];
                    require_once "config.php";
                    $sql = "SELECT * FROM registration_tbl WHERE user_email = '$email'";
                    $result = mysqli_query($conn, $sql);
                    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    if ($user) {
                        if(password_verify($password, $user["user_password"])) {
                            $_SESSION["USER"] = $user["user_fname"];
                            header("Location: homepage.php");
                            die();
                    } else {
                        echo "<div class= 'alert alert-danger'> Password does not match </div>";
                    }
            } else {
                echo "<div class = 'alert alert-danger'> Email does not match </div>";
            }
        }
        ?>
                <form action="index.php" method="post">
                  
         
                            <div class="form-group">
                              <label for="inputEmail4">Email</label>
                              <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email">
                
                          
                        </div>
                
                            <div class="form-group">
                                <label for="inputPassword4">Password</label>
                                <input type="password" class="form-control" id="inputPassword4" name="password" placeholder="Password" required>
                          
                          </div>  
                    
                        <button class="btn btn-primary" name="submit" type="submit">Login</button>
                      </form>      
            </div>
            
        </div>
        <a href="register.php">Don't have an account yet? Sign up here</a>
        <a href="homepage.php">Continue as a guest</a>
        <!-- <script src="" async defer></script> -->
    </body>
    
</html>