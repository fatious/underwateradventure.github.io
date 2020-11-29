<?php
$name =@_post['name'];
$visitor_email = $Post['email'];
$message = $_POST['message'];

$emai_from='kevinlugo_014@yahoo.com';

$email_subject=" New Form Submission";

$email_body="User Name: $name.\n".
            "User Email: $visitor_email.\n".
            "User Message: $message.\n";

$to="kevinlugo_014@yahoo.com";

$headers= "From: $email_from \r\n";
    
$headers .="Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: Contact.htm");
    

?>