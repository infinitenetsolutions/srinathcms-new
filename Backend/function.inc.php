<?php
// send the main in the email variable
function generate_otp($email){
    return $_SESSION['otp'] = rand(100000, 999999);
}
function send_otp(){
    
}
?>