<?php



// Create connection
//$con = new mysqli("localhost", "", "", "");
if ($_SERVER['HTTP_HOST'] == 'localhost') {
    $con = new mysqli('localhost', 'root', '', 'srinath_cms');
} else {
    $con = new mysqli("localhost", "phpmyadmin", "raja@#", "srinath_cms");
    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
}

