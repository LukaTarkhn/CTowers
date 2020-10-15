
<?php
  $phone = $_POST['phone'];
  $message = $_POST['message'];
  $formcontent="\n Phone: $phone";
  $subject = "Call me (Real Palace)";
  $recipient = "info@calligraphy-towers.com";
  mail($recipient, $subject, $formcontent) or die("Error!");
  echo "Thank You!";
?>
