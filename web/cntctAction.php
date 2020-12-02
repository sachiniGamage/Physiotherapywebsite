<?php

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$con = mysqli_connect("sql12.freemysqlhosting.net","sql12379747","VpXKiTA1iu","sql12379747","3306");
	   if(!$con)
	   {
		 die("Cannot connect to DB server");
	   }

//		$email_from = "kkgamage1959@gmail.com";
//		$email_subject="dafag";
//
//
//		$email_body ="User name:$name.\n".
//			"User email:$email.\n".
//			"User message:$message.\n";

$sql ="INSERT INTO `email`(`name`, `email`, `message`) VALUES ('".$name."','".$email."','".$message."')";


//		$to = "azddummy@gmail.com";
//		$headers = "From : $email_from \r\n";
//		$headers = "Reply-To : $email \r\n";
//		mail($to,$email_subject,$email_body,$headers);
//		header("Location:contact.html");

mysqli_query($con,$sql);
		echo "Registered successfully";
header("Location:physiotherapy1.html");



exit();

?>
