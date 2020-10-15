
<?php
if ( isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['message']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {
$email = $_POST['email'];
$subject = "ბინის შეძენის თაობაზე";
$phone = $_POST['phone'];
$message = $_POST['message'];
$formcontent="\n Email: $email \n Phone: $phone \n Message: $message";
$recipient = "info@calligraphy-towers.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
}
?>
