<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/register.css">
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
      <a class="navbar-brand" href="index1.php">PHYSIOTHERAPY</a>
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


<script type="text/javascript">
  function validateName()
    {
    var name = document.getElementById("txtFullName").value;
    if((name == "")||(name == null))
    {
      alert("Please enter your name");
      return false;
    }
    return true;
    }
    
    function validateAddress()
    {
      var name = document.getElementById("txtAddress").value;
      if((name == "")||(name == null))
    {
      alert("Please enter your Address");
      return false;
    }
      return true;
    }
    
  function validateEmail()
    {
      var email = document.getElementById("txtEmail").value;
      var at = email.indexOf("@");
      var dt = email.lastIndexOf(".");
      var len = email.length;
  
    if((at < 2)||(dt-at < 2)||(len-dt < 2))
    {
      alert("Please enter a valid email address");
      return false;
    }
      return true;
    }
    
    
    
  function validateContact()
  {
    var cno = document.getElementById("txtContact").value;
    if((isNaN(cno))||(cno.length != 10))
  {
    alert("Please enter a valid contact number");
    return false;
  }
    return true;
  }
    
    function Validate()
    {
      if(validateName()&& validateEmail()&& validateAddress() && validateContact())
    {
      alert("Registration is completed");
    }
    else
    {
      event.preventDefault();
    }
  }
</script>
</head>

<body>
  
	<form action="addUser.php" method="post"> 

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
      <td width="251" bgcolor="#A3861F">Age</td>
      <td width="419"><label for="txtAge"></label>
      <input type="text" placeholder="Enter Age" name="txtAge" id="txtAge" /></td>
    </tr>

    <tr>
      <td bgcolor="#A3861F">Gender</td>
      <td><p style="color: black">
        <label style="color: black">
          <input type="radio" name="rdoGender" value="Male" id="rdoGender_0" style="color: black"/>
          Male</label>
 
        <label style="color: black">
          <input type="radio" name="rdoGender" value="Female" id="rdoGender_1"  />
          Female</label>
      </p></td>
    </tr>

    <tr>
      <td width="251" bgcolor="#A3861F">Address</td>
      <td width="419"><label for="txtNickName"></label>
      <input type="text" placeholder="Enter Address" name="txtAddress" id="txtAddress" /></td>
    </tr>

    <tr>
      <td width="251" bgcolor="#A3861F">Occupation</td>
      <td width="419"><label for="txtOccupation"></label>
      <input type="text" placeholder="Enter your occupation" name="txtOccupation" id="txtOccupation" /></td>
    </tr>

    <tr>
      <td bgcolor="#A3861F">Contact Number</td>
      <td><label for="txtContact"></label>
      <input type="text" name="txtContact" id="txtContact" /></td>
    </tr>

    <tr>
      <td bgcolor="#A3861F">Email Address</td>
      <td><label for="txtEmail"></label>
      <input type="text" placeholder="someone@example.com" name="txtEmail" id="txtEmail" /></td>
    </tr>
    
      
      <p>
       
 </p>
      
    
    </table>
    <br>
    <td><table width="366" border="0" align="center">
        <tr>
          <td width="167" ><input type="submit" name="btnSubmit" id="btnSubmit" value="Register" onclick="Validate()" /></td>
          <td width="189"><input type="reset" name="btnReset" id="btnReset" value="Reset" /></td>
        </tr>
      </table></td>
    </div>
	</form>

</body>
</html>