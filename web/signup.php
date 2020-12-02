<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https:/ /maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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
      <a class="navbar-brand" href="index.php">PHYSIOTHERAPY</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
		
      
      
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
  
<div>
    
</div>

<script type="text/javascript">


  function validateName()
    {
		
    var name = document.getElementById("txtFullName").value;
		var p = new RegExp("^[a-zA-Z]+(([a-zA-Z ])?[a-zA-Z]*)*$");
		var r = var p.exec(name);
    if((name == "")||(name == null) (name != r) )
    {
      alert("Please enter your name");
      return false;
    }
    return true;
    }


    function validatePassword()
    {
      var pwd = document.getElementById("txtPassword").value;
      var cpwd = document.getElementById("txtConfirmPassword").value;
      if((pwd.length < 5)||( pwd != cpwd))
    {
      alert("Please enter a correct Password and enter the to Confirm password");
      return false;
    }
      return true;
    }


    function Validate()
    {
      if(validateName() && validateEmail()&&validatePassword())
    {
      alert("Registration is completed");
    }
    else
    {
      event.preventDefault();
    }
  }
    </script>

 <form action="signupUser.php" method="post">   

<div align="center">
    <tr><table width="366" border="0" align="center">
      <td colspan="2" bgcolor="#9C722D"><u><h1>User Details</h1></u></td>
    </tr>
    <tr>
      <td width="251" bgcolor="#A3861F">Full Name</td>
      <td width="419"><label for="txtFullName"></label>
      <input type="text" placeholder="Enter Full Name" name="txtFullName" id="txtFullName" /></td>
    </tr>
    <tr>
      <td bgcolor="#A3861F">Email Address</td>
      <td><label for="txtEmail"></label>
      <input type="text" placeholder="someone@example.com" name="txtEmail" id="txtEmail" /></td>
    </tr>

     <p>
       
 </p>


    <tr>
      <td bgcolor="#A3861F">Password</td>
      <td><label for="txtPassword"></label>
      <input type="password" name="txtPassword" id="txtPassword" class="datalist" /></td>
    </tr>
    <tr>
      <td bgcolor="#A3861F">Confirm Password</td>
      <td><label for="txtConfirmPassword"></label>
      <input type="password" name="txtConfirmPassword" id="txtConfirmPassword" class="datalist" /></td>
    </tr>
    </table>
    <br>
    <td><table width="366" border="0" align="center">
        <tr>
          <td width="167" ><input type="submit" name="btnSubmit" id="btnSubmit" value="Register" onclick="Validate()" /></td>
          <td width="189"><input type="reset" name="btnReset" id="btnReset" value="Reset" /></td>
        </tr>
      </table></td>
    </div>
    
</tr>
</div>
</form>
</body>
</html>