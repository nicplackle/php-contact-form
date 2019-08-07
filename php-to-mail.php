<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Link to page with password
include("password_variable.php");


if(isset($_POST['submit'])) {
// HTML form input data
    $name = $_POST["name"];
    $clientEmail = $_POST["client_email"];
    $clientMessage = $_POST["text_message"];


// look of the email 
$email_from = $clientEmail;
$email_subject = "You received a new email from $clientEmail";
$email_body = "This is a new message sent by $name. The message: $clientMessage";

// check user input
if (empty($name)){
    exit;
} else if (empty($clientEmail)) {
    echo "*Email is missing*";
    exit;
} else if (empty($clientMessage)) {
    echo "*Message box is empty*";
    exit;
} else {
    $mail;
}

// Sanitization
$sanitized_email = filter_var($clientEmail, FILTER_SANITIZE_EMAIL);
    if (filter_var($sanitized_email, FILTER_VALIDATE_EMAIL)) {
        $mail;
    } else {
        echo "Enter a valid email address";
        exit;
    }

}

// Load Composer's autoloader
require 'vendor/autoload.php';


// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);


try {
  //Server settings
  // $mail->SMTPDebug = 2;                                       // Enable verbose debug output
  $mail->isSMTP();                                            // Set mailer to use SMTP
  $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
  $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
  $mail->Username   = 'nicplackle@gmail.com';                     // SMTP username
  $mail->Password   = $password;                               // Google SMTP password
  $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
  $mail->Port       = 587;                                    // TCP port to connect to



  //Recipients
  $mail->setFrom($clientEmail, $name);
  $mail->addAddress('nicplackle@gmail.com', 'Nic Placklé'); 

  // Content
  $mail->isHTML(true);                                  
  
  // Set email format to HTML
  $mail->Subject = $email_subject;
  $mail->Body    = $email_body;
  $mail->AltBody = $email_body;

  $mail->send();
  echo "Message has been sent";
} catch (Exception $e) {
  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>