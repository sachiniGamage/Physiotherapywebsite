<?php

$name=$_POST["txtFullName"];
$email=$_POST["txtEmail"]; 
$pw = $_POST["txtPassword"];


 $con = mysqli_connect("sql12.freemysqlhosting.net","sql12379747","VpXKiTA1iu","sql12379747","3306");
	 if(!$con)
	 {
		 die("Cannot connect to DB server");
	 }
	 $sql = "INSERT INTO `preg`(`userName`, `userEmail`, `userpsw`) VALUES ('".$name." ','".$email."','".$pw."')";


	 // $sql = "INSERT INTO `patient` (`userEmail`, `username`,`userAge`, `gender`,`userAddress`,  `userTeleno`, `user`, `userpsw`) VALUES ('".$email."', '".$name." ', '".$address."', '".$gender."', '".$cno."', '".$user."', '".$pw."'); ";
	 
	mysqli_query($con,$sql);
		echo "Registered successfully";
header("Location:login.php");
//	mysqli_close($con);
							   
exit();
		

?>
