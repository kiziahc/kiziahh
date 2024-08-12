<?php

$hostName = "localhost";
$dbUser ="root";
$dbpassword ="";
$dbName ="human nature";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if(!$conn){
    die("something wentwrong;");
}
    echo"connected successfully";
    ?>