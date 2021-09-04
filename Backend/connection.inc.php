<?php

session_start();
if($_SERVER['HTTP_HOST']=="localhost"){
    $connection=mysqli_connect("localhost","root","","srinathuniversity");
}
else{
    $connection=mysqli_connect("localhost","phpmyadmin","raja@#","srinathuniversity");
}

?>