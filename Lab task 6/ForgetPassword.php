<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
</head>
<body>
<br />
	<h3 align="Center">
		<font face="Lato" size="6"></font>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
		<font face="cinzel" size="4">
			
			<a href="Login page.php">Login</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="Registration.php">Registration</a>&nbsp;&nbsp;&nbsp;&nbsp;
			
		</font><br><br>


  <fieldset>
    <legend>
  Forgot Password

    </legend>
    <form action="CheckForgetPassword.php" method=post >
   
    <label> Enter Email:</label>
    <input type="emai" name="email" id="email"><br><hr/>
   
   

<input type="submit">


</form>
</fieldset>  

</body>
</html>
<?php
include('footer.php');
?>