<?php



// Here we get all the information from the fields sent over by the form.

$email = $_POST['email'];


	$to = 'adrian.smith@infinity-intellect.com';
	$subject = 'Inquiry for Consultation';
	$message = ' Email: '.$email."\r\n";
	$headers = 'From: optout@enterprise.com' . "\r\n";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // this line checks that we have a valid email address
    mail($to, $subject, $message, $headers); //This method sends the mail.
echo '<script>window.open("nextpage.html");</script>';

   echo "Thank You!  A CPC Finance Account Executive will contact you within 24 hours for your consultation"; // success message

	
}else{
	echo "Invalid Email, please provide an correct email.";
}
	

	
	
	


?>