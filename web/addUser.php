<?php

$name=$_POST["txtFullName"];
$age = $_POST["txtAge"];
$gender = $_POST["rdoGender"];
$address=$_POST["txtAddress"];
$ocuupation=$_POST["txtOccupation"];
$cno=$_POST["txtContact"];
$email=$_POST["txtEmail"]; 
$admit = "No";
$ward = "-";
 $con = mysqli_connect("localhost","root","","phy","3306");
	 if(!$con)
	 {
		 die("Cannot connect to DB server");
	 }
//	$connt = "SELECT * FROM `patient` WHERE Reg_no = (SELECT MAX(`Reg_no`) from `patient`)";
//	$s = $connt++;
//	$s = "SELECT * FROM `patient` ";

	 $sql = "INSERT INTO `patient` ( `Name`, `Age`, `Gender`, `Address`, `Occupation`, `Contact_number`, `email`,`admit`,`ward`) VALUES ('".$name."','".$age."','".$gender."','".$address."','".$ocuupation."','".$cno."','".$email."','".$admit."','".$ward."')";


	 // $sql = "INSERT INTO `patient` (`userEmail`, `username`,`userAge`, `gender`,`userAddress`,  `userTeleno`, `user`, `userpsw`) VALUES ('".$email."', '".$name." ', '".$address."', '".$gender."', '".$cno."', '".$user."', '".$pw."'); ";
	 
//	  mysqli_query($con,$sql);
//	$result = mysqli_query($con,$sql);
//$n=mysqli_num_rows($result);
//if ( $n> 0) {
//  // output data of each row
//  while($row = mysqli_fetch_assoc($result)) {
//    echo "name: " . $row["Name"].  "<br>";
//  }
//} else {
//  echo "0 results";
//}
if (mysqli_query($con, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
		header( 'Location:Register.php');
//exit();
mysqli_close($con);
?>