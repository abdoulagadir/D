<?php
  $name = $_POST['fname'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];
?>
<?php
	$email_from = 'tariqmosaid0@gmail.com';

	$email_subject = "New Form submission";

	$email_body = "You have received a new message from the user $name.\n".
                            "Here is the message:\n $message".
?>