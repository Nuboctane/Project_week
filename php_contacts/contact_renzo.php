<?php
  
if($_POST) {
    $visitor_name = "";
    $visitor_email = "";
    $email_title = "";
    $concerned_department = "";
    $visitor_message = "";
    $email_body = "";
      
    if(isset($_POST['visitor_name'])) {
        $visitor_name = filter_var($_POST['visitor_name'], FILTER_SANITIZE_STRING);
        $email_body .= "<b>".$visitor_name."</b><br>";
    }

    if(isset($_POST['visitor_email'])) {
        $visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['visitor_email']);
        $visitor_email = filter_var($visitor_email, FILTER_VALIDATE_EMAIL);
        $email_body .= "<b>".$visitor_email."</b><br>";
    }
      
    if(isset($_POST['email_title'])) {
        $email_title = filter_var($_POST['email_title'], FILTER_SANITIZE_STRING);
        $email_body .= "<b>".$email_title."</b><br>";
    }
      
      
    if(isset($_POST['visitor_message'])) {
        $visitor_message = htmlspecialchars($_POST['visitor_message']);
        $email_body .= "<b>".$visitor_message."</b><br>";
    }
      
 
    $recipient = "200739@student.glu.nl";

 
    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $visitor_email . "\r\n";
    if(mail($recipient, $email_title, $email_body, $headers)) {
        echo "Bedankt dat u met ons contact wou op nemen, $visitor_name. U krijgt in de toekomst nog een reactie.";
    }else{
     echo 'Sorry, er is iets mis genaan, probeer het mogelijk opnieuw.<br><button action="action" onclick="window.history.go(-1); return false;" type="submit" value="Cancel">ga terug</button>';
    }
}
?>

