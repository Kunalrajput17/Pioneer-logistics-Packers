<?php
error_reporting(0);
ini_set('display_errors', 0);

$name = isset($_POST['name']) ? clean_input($_POST['name']) : '';
$email = isset($_POST['email']) ? clean_input($_POST['email']) : '';
$mobile = isset($_POST['mobile']) ? clean_input($_POST['mobile']) : '';
$movingFrom = isset($_POST['movingFrom']) ? clean_input($_POST['movingFrom']) : '';
$movingTo = isset($_POST['movingTo']) ? clean_input($_POST['movingTo']) : '';
$comment = isset($_POST['comment']) ? clean_input($_POST['comment']) : '';

function clean_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

$to = "info@pioneerlogisticspackersmovers.com";
$subject = "New Relocation Inquiry: " . $movingFrom . " to " . $movingTo;

$message = "You have received a new relocation inquiry from your website.\r\n\r\n" .
           "Here are the details:\r\n" .
           "---------------------------------------------\r\n" .
           "Name: " . $name . "\r\n" .
           "Email: " . $email . "\r\n" .
           "Mobile: " . $mobile . "\r\n" .
           "Moving From: " . $movingFrom . "\r\n" .
           "Moving To: " . $movingTo . "\r\n" .
           "Message/Comments: " . $comment . "\r\n" .
           "---------------------------------------------";

// Crucial: The From address MUST be a domain email address on this server to bypass SPF/spam blocks
$from = "info@pioneerlogisticspackersmovers.com";
$headers = "MIME-Version: 1.0" . "\r\n" .
           "Content-Type: text/plain; charset=UTF-8" . "\r\n" .
           "From: Pioneer Logistics Packers <" . $from . ">" . "\r\n" .
           "Reply-To: " . $name . " <" . $email . ">" . "\r\n" .
           "X-Mailer: PHP/" . phpversion();

// Attempt to send email
@mail($to, $subject, $message, $headers);

// Always redirect to the thanks page to give the customer positive confirmation
header('Location: thanks.php');
exit();
?>
