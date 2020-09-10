<?php ob_start();



	if(isset($_POST['submit'])) {
		
	$to = 'engrr.abdulhanan@gmail.com';
	$subject = $_POST['subject'];
	$email = $_POST['email'];
	$txt = $_POST['message'];
	$headers = "From: " .$email . "\r\n" .
	"CC: somebodyelse@example.com";
	
	if(mail($to,$subject,$txt,$headers))
    {
	header("Location: contact.html");
    echo "SUCCESS";
    }
        else {
            echo "ERROR";
        }
		
	
	}




?>