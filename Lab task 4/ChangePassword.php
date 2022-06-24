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
 echo "<h2 style='text-align:left'>XCompany</h2>";
		echo "<h4 style='margin-left:80%;'>
    Login as | <a href='Logout.php'>Logout</a></h4>";
		
 
?>
  
</fieldset>  

<fieldset>
    <h3>Account</h3>
    <div style="border-top:1px solid black;width:30%;margin:0"></div>
    <ul>
      <li>  <a href="DASHBOARD.php">Dashboard</a> </li>
   <li> <a href="ViewProfile.php ">View Profile</a></li>
     <li><a href="EditProfile.php ">Edit Profile</a></li> 
      <li><a href=" ChangeProfilePicture.php "> Change Profile Picture</a></li>
      <li><a href="ChangePassword.php">Change Password</a></li>
      <li><a href="Logout.php">Logout </a></li>
  
  
    </ul>
    <div style="border-left:1px solid black;height:70px;margin-left:30%;top:5%"></div>
    <?php
    session_start();
    echo "<h2>Welcome,".$_SESSION['username']."</h2>";
    ?>

<?php
global $currPass;
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    function test($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    //$currentpassword= test($_POST['currentpassword']);
    $newpassword = test($_POST['newpassword']);
    $retypenewpassword = test($_POST['retypenewpassword']);
    $currPass="abc@1234";
    if(empty($newpassword) or empty($retypenewpassword)) 
      { echo "Fields are empty";}     
      else 
       {
        
          

            if ($currPass!=$newpassword) {
                echo "new password should not be same as the current password";
              }
               if ($newpassword==$retypenewpassword) {
                echo "newpassword must match with the retypenewpassword <br><br>";
                echo $currPass."<br><br>";
                echo $newpassword."<br><br>";
                echo $retypenewpassword;
              }
       


       }
    }
    ?>
  <fieldset>
    <legend>
    Change Password

    </legend>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method=post novalidate>
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