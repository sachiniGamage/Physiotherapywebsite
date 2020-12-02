<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact Us</title>
	<link rel="stylesheet" type="text/css"  href="css/contct.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
	<div class="temp" style="background-color: black" >
      <div class="text">
        <h1 align="center" style="color: aqua " >PHYSIOTHERAPY UNIT</h1>
      </div>
  </div>
	
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="physiotherapy1.html">PHYSIOTHERAPY</a>
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
</head>

<body>
	
	
	<div class="contact-title">
		<h1>Hello</h1>
		<h2>We Are Always Ready To Serve You!</h2>
	</div>
	
	<div class = "contact-form">
		<form id = "contact-form" method="post" action="cntctAction.php">
			<input name = "name" type="text" class="form-control" placeholder="Your Name" required>
			<br>
			<input name = "email" type="email" class="form-control" placeholder="Your Email" required>
			<br>
			<textarea name = "message" class="form-control" placeholder="Message" rows="4" required></textarea>
			<br>
			<input type="submit" class="form-control submit" value="SEND MESSAGE">
		</form>
	</div>
	
</body>
</html>
