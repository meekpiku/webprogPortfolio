<?php
$hostname = "127.0.0.1:3307";
$db_user = "niel";
$db_pass = "123";
$db_name = "portfolio_db";
$conn = mysqli_connect($hostname, $db_user, $db_pass, $db_name);
// if(!$conn){
//             die("Connection to DB Failed");
//         }else{
//             echo "Connection stable";
//         }
?>