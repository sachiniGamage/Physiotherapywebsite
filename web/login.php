<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="loginT.css">
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
      <a class="navbar-brand" href="index.html">PHYSIOTHERAPY</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.html">Home</a></li>
      
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>

  <div class="view" style="background-image:"></div>


  <form  method="post" action="LAction.php">
    
    <tr>
      <td height="627">
      <table align="center">
      <tr><td width="411">
      
      
  <div class="imgcontainer" align="center">
    <img src="img/avatar.jpg " alt="Avatar" class="avatar" width="150" height="150">
  </div>
		  <br>
		  <br>

  <div class="container" align="center">
    <p>
    <label for="uname" style="color: white"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
  
    <label for="psw" style="color: white"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    
      </p>
 <p> 
 </p>
	  <br>
		  <br>
    <button type="button" class="cancelbtn" name="cancel" >Cancel</button>
    
    <button type="submit">Login</button>
	  
    
	  
    
  
  </div>

  
</form>






    
      

    


</body>
</html>