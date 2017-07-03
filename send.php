<?php



// Here we get all the information from the fields sent over by the form.
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$Bname =$_POST['n2'];
$num =$_POST[n7];
$altnum = $_POST[n8];
$typeofbuss = $_POST[n4];
$yinbuss = $_POST[n5];
$annualgros=$_POST[n6];


	$to = 'leads@cpcfinance.com';
	$subject = 'Inquiry for Consultation';
	$message = 'FROM: '.$name."\r\n".'Business Name:'.$Bname."\r\n".' Email: '.$email."\r\n".'Type of Business:'.$typeofbuss."\r\n".'Years in Business:'.$yinbuss."\r\n".'Annual Gross:'.$annualgros."\r\n".'Contact Num:'.$num."\r\n".'Alt Num:'.$altnum."\r\n".'Message: '.$message;
	$headers = 'From: optout@email.com' . "\r\n";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // this line checks that we have a valid email address
    mail($to, $subject, $message, $headers); //This method sends the mail.
echo '<script>window.open("nextpage.html");</script>';

   echo "Thank You!  A CPC Finance Account Executive will contact you within 24 hours for your consultation"; // success message

	
}else{
	echo "Invalid Email, please provide an correct email.";
}
	

	
	
	


?>