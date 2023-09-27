<?php	
	if (empty($_POST['name_26618']) && strlen($_POST['name_26618']) == 0 || empty($_POST['email_26618']) && strlen($_POST['email_26618']) == 0 || empty($_POST['message_26618']) && strlen($_POST['message_26618']) == 0)
	{
		return false;
	}
	
	$name_26618 = $_POST['name_26618'];
	$email_26618 = $_POST['email_26618'];
	$message_26618 = $_POST['message_26618'];
	
	$to = 'ernie.manosanta@gmail.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Picturelock Website Message";
	$email_body = "You have received a new message. \n\n".
				  "Name_26618: $name_26618 \nEmail_26618: $email_26618 \nMessage_26618: $message_26618 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: ernie.manosanta@gmail.com\r\n";
	$headers .= "Reply-To: $email_26618";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>