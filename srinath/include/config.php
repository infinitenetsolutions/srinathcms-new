<?php
    // Create connection
    //$con = new mysqli("localhost", "", "", "");
    if($_SERVER['HTTP_HOST']=='localhost'){
        $con = mysqli_connect('localhost','root','','srinath_cms');
    }
    else{
    $con = mysqli_connect("localhost", "root", "raja@#", "srinath_cms");
    // Check connection
    // if ($con->connect_error) {
    //     die("Connection failed: " . $con->connect_error);
    // }
}
?>