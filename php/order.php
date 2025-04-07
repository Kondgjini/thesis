<?php
if (isset($_POST['submit'])) {
  $to = "fatjon.canaj@cit.edu.al";
  $subject = "Order Request";
  $message = "A user has requested to order a car.";
  $headers = "From: loggedpage.html";

  if (mail($to, $subject, $message, $headers)) {
    echo "Your request has been sent successfully!";
  } else {
    echo "There was an error sending your request. Please try again later.";
  }
}
?>
