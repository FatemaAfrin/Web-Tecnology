<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
</head>
<body>


  <fieldset>
    <legend>
  REGISTRATION
  <fieldest>

  <h3 align="Center">
		<font face="Lato" size="6"></font>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
		<font face="cinzel" size="4">
      
        <a href="Login.php">Login</a>&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="Registration.php">Registration</a>&nbsp;&nbsp;&nbsp;&nbsp;
			
		</font>
        <br><br>

 

    <form action="CheckRegistration.php" method=post >
    <form action="connection.php" method=post >
    <label> Name:</label>
    <input type="text" name=" name" id="name" ><br><hr/> <br>
    <label>Email:</label>
    <input type="email" name=" email" id="email"><br><hr/> <br>
    <label>User Name:</label>
    <input type="text" name=" uname" id="uname"><br><hr/> <br>
    <label>Password:</label>
    <input type="password" name=" password" id=" password"><br><hr/>
    <label>Confirm Password:</label>
    <input type="password" name="confirmpassword" id="confirmpassword"><br><hr/>
    </legend>
    </fieldest>
    <fieldset>
        <legend for="gender">Gender</legend>
        <input type="radio" name="gender" id="malegender" value="male">Male
      <input type="radio" name="gender" id="femalegender" value="female">Female
      <input type="radio" name="gender" id="othergender" value="others">Others
    </fieldset>
    
    <fieldset>
        <legend>Date of Birth</legend>
        <input type="date" id="dob" name="dob" value="">
    </fieldset>

    
<input type="submit">
<input type="Reset">

	

</form>
</form>
</fieldset>  

</body>
</html>
<?php
include('footer.php');
?>