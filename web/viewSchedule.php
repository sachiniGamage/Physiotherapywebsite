<?php session_start();
$date = $_POST["schdl_date"];

$con = mysqli_connect("localhost","root","","phy","3306");
   if(!$con)
   {
     die("Cannot connect to DB server");
	   
   }
echo "1";

   $sql = "SELECT * FROM `physioshedule` WHERE `date`='".$date."'";
   $result = mysqli_query($con,$sql);
echo($sql);
   

   if(mysqli_num_rows($result)>0)
   {
     $valid = true;
	   
	   echo "valid true";
	    $_SESSION["abc"] = $valid;
	   
   }
   mysqli_close($con);



//
//while($row = mysqli_fetch_array($sql)){
//	echo "<tr>";
//	echo "<td>" . $row["time"] . "</td>";
//	echo "</tr>";
//}

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   $_SESSION['time'] = $row["time"];
  }
}



header( 'Location:Appointment2.html');
//echo "Time"

	 
 exit();
?>