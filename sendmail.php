<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "your@email.com";
$subject = "New Consultation Request";

$body = "Name: $name\nEmail: $email\nMessage: $message";

$headers = "From: noreply@counsellabroad.com";

mail($to, $subject, $body, $headers);

echo "Message Sent Successfully!";
}
?>
