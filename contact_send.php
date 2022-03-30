<?php

include('index.html');

// Require config file
require_once( 'config.php' );

// Send email
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php";

global $email_address, $password, $from, $fromName, $to, $toName, $subject;

$mail = new PHPMailer(true);

//Enable SMTP debugging.
$mail->SMTPDebug = false;
//Set PHPMailer to use SMTP.
$mail->isSMTP();
//Set SMTP host name
$mail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;

//Provide username and password
$mail->Username = $email_address;
$mail->Password = $password;

//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "ssl";
//Set TCP port to connect to
$mail->Port = 587;

$mail->From = $from;
$mail->FromName = $fromName;

//To address and name
$mail->addAddress($to, $toName);

//Send HTML or Plain Text email
$mail->isHTML(true);

$mail->Subject = $subject;

$mail->Body = '<div style="background-color:#e0eaef; padding:50px 0px 50px 0px;">
      <div style="background-color:#282b5e; margin:0px 50px 0px 50px; font-family: Arial, Helvetica, sans-serif;">
        <div style="color:white; padding:25px 50px 25px 50px;">
          <h2>' . $_POST['name'] . ' ' . 'sent you the following message:</h2>
          <h3>' . $_POST['subject'] . '</h3>
          <h4>' . $_POST['message'] . '</h4>
          <h4>Reply to: ' . $_POST['email'] . '<h4>
        </div>
    	</div>
    </div>';

$mail->send();

global $whitelist;

// Whitelist data
foreach ( $whitelist as $key ) {
  $fields[$key] = $_POST[$key];
}

alert("Your message has been sent to Aingeli!");

function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}

?>
