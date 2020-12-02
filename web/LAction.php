<?php
 
 $userName = $_POST["uname"];
 $password = $_POST["psw"];
$cancel = $_POST["cancel"];
//   if (isset($_POST ["remember"]))
//   {
//     $status = 1;
//   }
//   else{
//     $status = 0;
//   }
//   $valid=false;
   
   $con = mysqli_connect("sql12.freemysqlhosting.net","sql12379747","VpXKiTA1iu","sql12379747","3306");
   if(!$con)
   {
     die("Cannot connect to DB server");
   }
   $sql = "SELECT * FROM `preg` WHERE `userEmail`='".$userName."' and `userpsw`='".$password."' ";
   $result = mysqli_query($con,$sql);
   
   if(mysqli_num_rows($result)>0)
   {
     $valid = true;
   }
   mysqli_close($con);
   
 if ($valid)
 {//keep username in session
 $_SESSION["txtEmail"] = $userName;
	 
 header( 'Location:index1.php');
 }
 else
 {
echo  "Please enter a correct User name and Password";
	 header( 'Location:login.php');
 }

 

  ?>
