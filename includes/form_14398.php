<?php	
	if (empty($_POST['name_26618_14398']) && strlen($_POST['name_26618_14398']) == 0 || empty($_POST['email_26618_14398']) && strlen($_POST['email_26618_14398']) == 0 || empty($_POST['message_26618_14398']) && strlen($_POST['message_26618_14398']) == 0)
	{
		return false;
	}
	
	$name_26618_14398 = $_POST['name_26618_14398'];
	$email_26618_14398 = $_POST['email_26618_14398'];
	$message_26618_14398 = $_POST['message_26618_14398'];
	
	$to = 'ernie.manosanta@gmail.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Picturelock Website Message";
	$email_body = "You have received a new message. \n\n".
				  "Name_26618_14398: $name_26618_14398 \nEmail_26618_14398: $email_26618_14398 \nMessage_26618_14398: $message_26618_14398 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: ernie.manosanta@gmail.com\r\n";
	$headers .= "Reply-To: $email_26618_14398";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>