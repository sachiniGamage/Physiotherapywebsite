<?php
//$date = $_POST['schdl_date'];
$output = '';
$con = mysqli_connect("sql12.freemysqlhosting.net","sql12379747","VpXKiTA1iu","sql12379747","3306") ;
if(!$con)
   {
     die("Cannot connect to DB server");
   }


if(isset($_POST['schdl_date'])){
	$search = $_POST['schdl_date'];
	
	$query ="SELECT time FROM physioshedule WHERE date = '".$search."'";
	$result = mysqli_query($con,$query);
	
	
	if(mysqli_num_rows($result) > 0){
		
		while($row = mysqli_fetch_array($result)){
			$time = $row['time'];
			$output .= '<div> '.$time.' </div>';
		}
	}else{
		$output = 'There was no search reesult';
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Appointment.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <div class="temp" style="background-color: black" >
      <div class="text">
        <h1 align="center" style="color: aqua " >PHYSIOTHERAPY UNIT</h1>
      </div>
  </div>

</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="physiotherapy1.php">PHYSIOTHERAPY</a>
    </div> 
    <ul class="nav navbar-nav">
      <li class="active"><a href="index1.php">Home</a></li>
      <li><a href="Register.php">Register</a></li>
     
      <li><a href="Appointment2.php">Appointment</a></li>
		<li><a href="contact.php">Contact Us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php"><span class="glyphicon glyphicon-user"></span> Log Out</a></li>
    </ul>
  </div>
</nav>
  
<div>
    
</div>
<form method="post" action="Appointment2.php" align = "center">
		<h4>Available Time</h4>
		<label>Appointment date:</label>
		<input type="text" placeholder="YYYY-MM-DD" id="schdl_date" name="schdl_date"/>

		<br>
		<div align="center" >
			<td><table width="366" border="0" align="center">
		<tr align="center">
		 <td width="167" align="center">
			 <input type="submit" value="Check"  /></td>
			<?php  print("$output"); ?>
		<br>
			</tr>
				</table></td>
			</div >
	
	</form>
<!--	<h4>time:</h4>-->
	


	<br>
	<br>
	
	<form method="post" action="Appointment.php" align="center">
		<h1>APPOINTMENT</h1>
		<label>Appointment date:</label>
		<input type="date" id="input_date" name="input_date"/>
		<br>
		<label>Appointment time:</label>
		<input type="time" id="input_time" name="input_time"/>
<!--		<input type="datetime-local" name="appointmntdate">-->
		<br>
		<label>Physiotherapist</label>
		<select id="physiotherpst" name="physiotherpst">
			<option value="Mr.Sampath">Mr.Sampath</option>
			<option value="Mrs.Rasika">Mrs.Rasika</option>
			<option value="Mr.Asanka">Mr.Asanka</option>
			
		</select>
		<div >
		<td><table width="366" border="0" align="center">
        <tr>
          <td width="167" ><input type="submit" name="btnSubmit" id="btnSubmit" value="Submit"  /></td>
          <td width="189"><input type="reset" name="btnReset" id="btnReset" value="Reset" /></td>
        </tr>
      </table></td></div>
	</form>



	
<!--
	<div class="container">
		<div class="row row-striped">
			<div class="col-2 text-right">
				<h1 class="display-4"><span class="badge badge-secondary">23</span></h1>
				<h2>OCT</h2>
			</div>
			<div class="col-10">
				<h3 class="text-uppercase"><strong>Ice Cream Social</strong></h3>
				<ul class="list-inline">
				    <li class="list-inline-item"><i class="fa fa-calendar-o" aria-hidden="true"></i> Monday</li>
					<li class="list-inline-item"><i class="fa fa-clock-o" aria-hidden="true"></i> 12:30 PM - 2:00 PM</li>
					<li class="list-inline-item"><i class="fa fa-location-arrow" aria-hidden="true"></i> Cafe</li>
				</ul>
				<p>Lorem ipsum dolsit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
		</div>
		<div class="row row-striped">
			<div class="col-2 text-right">
				<h1 class="display-4"><span class="badge badge-secondary">27</span></h1>
				<h2>OCT</h2>
			</div>
			<div class="col-10">
				<h3 class="text-uppercase"><strong>Operations Meeting</strong></h3>
				<ul class="list-inline">
				    <li class="list-inline-item"><i class="fa fa-calendar-o" aria-hidden="true"></i> Friday</li>
					<li class="list-inline-item"><i class="fa fa-clock-o" aria-hidden="true"></i> 2:30 PM - 4:00 PM</li>
					<li class="list-inline-item"><i class="fa fa-location-arrow" aria-hidden="true"></i> Room 4019</li>
				</ul>
				<p>Lorem ipsum dolsit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
		</div>
	</div>
-->
	

</body>
</html>
