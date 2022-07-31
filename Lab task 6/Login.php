  <?php
 session_start();
 if(isset($_SESSION['username']) and isset($_COOKIE['username'] ))
{
     header("Location:Dashboard.php");
 }

?>   
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
		<br>
		<font face="cinzel" size="4">
       
			 <a href="Login.php">Login</a>
            <a href="Registration.php">Registration</a>
			
		</font><br><br>


  <fieldset>
    <legend>
  LOGIN

    </legend>
    <form action="CheckLogin.php" method=post  novalidate >
     <label>User Name:</label> 
    <input type="text" name=" username" id="username"><br> <br>
    
    <label>Password:</label>
    <input type="password" name=" password" id=" password"><br><hr/>
   
   
<input id="remember" type="checkbox" name="remember" > <label for="remember">Remember Me</label>
<input type="submit" name="submit" value="Submit"><br>
<a href="Forgetpassword.php">Forget Password</a>
</form>
</fieldset>  

</body>
</html>
<?php
include('footer.php');
if(isset($_SESSION['errormsg']))
    {
        echo "<p>". $_SESSION['errormsg'] . "</p>";
    }
?>