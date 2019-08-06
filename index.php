<!--

// Alternative method.  Not possible with this to authenticate app yet

// display errors is in development stage
/*ini_set( 'display_errors', 1 );
error_reporting( E_ALL );

ini_set('SMTP', "smtp.gmail.com");
ini_set('smtp_port', "25");
ini_set('sendmail_from', "testmybest123@gmail.com");

$invalidEmail = false;
$name = '';
$email = '';
$message = '';

if (isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST["message"];

$mailTo = "testmybest123@gmail.com";
$headers = "From: ".$email;
$txt = "You have received an e-mail from ".$fullname.".\n\n".$message;

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $invalidEmail = true;
}

mail($mailTo, $email, $txt, $headers);
//header("location: index.php?mailsend");
 -->


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>PHP Contact Form</title>
    <!-- animation test -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <!-- end animation test -->
    <link rel="stylesheet" type="text/css" href="./assets/style/style.css">
  </head>
  <body>
    <!-- Use POST method / Use .gitignore file to hide / Error message / gmail connection info -->
  <main>

    <!-- animation test -->
    <div class="section animated bounceInLeft">
    <div class="contact-form">
      
      
    <form method="post" class="form-style">
        <h1>Contact Us:</h1>
        <div class="row">    
          <label for="lname">Full Name</label>
            <input type="text" name="name"  placeholder="Enter your full name">
          <span class="border-focus"></span>  
        </div>
        <div class="row">
            <label for="mail">Email</label>
            <input type="email" name="client_email"  placeholder="Enter your e-mail address" class="formelement" id="mail">
            <span class="border-focus"></span>  
        </div>  
        <div class="row">
            <label for="message">Your message</label>
            <textarea rows="4" name="text_message"  placeholder="Enter your message here" class="form-message">
            </textarea>
            <span class="border-focus-textarea"></span>
        </div>  
        <div class="row-button">
            <input type="submit" name="submit" class="submit-button" value="Send">
        </div>  
        <div class="php-message">
            <?php
            include("php-to-mail.php");
            ?>
        </div>  
      </form>
    </div>
    </div>
  </main>
  </body>
</html>

