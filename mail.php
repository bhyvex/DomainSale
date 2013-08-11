<?php
require_once('recaptchalib.php');
$privatekey = "6LfH9OUSAAAAAPECqogcP1KF7eM_fCh9ViCtYVES";
$resp = recaptcha_check_answer($privatekey,
    $_SERVER["REMOTE_ADDR"],
    $_POST["recaptcha_challenge_field"],
    $_POST["recaptcha_response_field"]);

if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
        "(reCAPTCHA said: " . $resp->error . ")");
} else {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $formcontent = "From: $name \n Email: $email \n Phone: $phone \n
	Message: $message";
    $recipient = $_SERVER['SERVER_ADMIN'];
    $subject = "Contact Form";
    $mailheader = "From: $email \r\n";
    mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
    echo "Thank You for your consideration! We will be in touch regarding the sale of" . $_SERVER['HTTP_HOST'];
}



?>
 
