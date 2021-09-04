<?php

// send the main in the email variable
function generate_otp($email)
{
    $_SESSION['otp'] = rand(100000, 999999);
    send_otp();
}
function send_otp()
{
    $reciever_email = $_SESSION['email'];
    $reciever_name = $_SESSION['name'];
    $otp=$_SESSION['otp'];
    $sender_email_id = "testingfor83013@gmail.com";  //here put the sender email id he show in the clint email
    $sender_password = "Rafiganj"; //here put the password of email id to send the email otp

    // here is the actual logic to send the otp on the email id show keep changes quirefully
    include 'phpmailer/PHPMailerAutoload.php';

    $mail = new PHPMailer;

    //$mail->SMTPDebug = 3;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = $sender_email_id;                 // SMTP username
    $mail->Password = $sender_password;                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    $mail->setFrom($sender_email_id, 'Srinath University');
    $mail->addAddress($reciever_email, $reciever_name);     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo($reciever_email, 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Otp Varification code';
    $mail->Body    = ' <big> Your One Time Varification Code is  <b>' . $otp . '</b> </big>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if (!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        return 'OTP has been sent on you Email id';
    }
}
