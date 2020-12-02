<?php
$date = $_POST["input_date"];
$time = $_POST["input_time"];
$physthrpst = $_POST["physiotherpst"];

 $con = mysqli_connect("localhost","root","","phy","3306");
	 if(!$con)
	 {
		 die("Cannot connect to DB server");
	 }

//$dt=$_POST['dt']; // Getting data from POST method of form
//$dt="2019-02-16T16:56:49";
//$d = DateTime::createFromFormat('Y-m-d\TH:i:s', $data);
//if($date)
//	{
//		$msg=' Date object is created using the input ';
//	}
//else{
//	$msg=' Unable to create date object ';
//	}
//echo $msg;

//$dateControl = document.querySelector('input[type="datetime-local"]');

$sql = "INSERT INTO `addappntmnt` ( `date`, `time`,`Physiotherapist`) VALUES ('".$date."','".$time."','".$physthrpst."')";

if (mysqli_query($con, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
		header( 'Location:index1.php');
//exit();
mysqli_close($con);
?>