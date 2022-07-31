<!DOCTYPE html>
<html lang="en">
<head>
  <title>DASHBOARD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
 
</head>
<body>
  

      <fieldset style="height:100px">
   
  
<?php
 echo "<h2 style='text-align:left'></h2>";
		echo "<h4 style='margin-left:80%;'>
    Login as | <a href='Logout.php'>Logout</a></h4>";
		
 
?>
  
</fieldset>  


   
  <fieldset>
    <legend>
    Change Password

    </legend>
    <form action="CheckChangePassword.php" method=post >
    <label>Current Password</label>
    <input type="password" name="currentpassword" id="CurrentPassword"><br> 
    
    <label style="color:green">New Password</label>
    <input type="password" name="newpassword" id="newPassword"><br>

    <label style="color:red">Retype New Password</label>
    <input type="password" name="retypenewpassword" id="retypenewPassword"><br> <hr/><br>


<input type="submit"><br>


</form>
</fieldset>  
  </fieldset>

  
		
   

	

</body>
</html>
<?php
include('footer.php');
?>


    

</body>
</html>