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
     <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method=post novalidate>
    <label> Name:</label>
    <input type="text" name=" name" id="name"><br><hr/> <br>
    <label>Email:</label>
    <input type="email" name=" email" id="email"><br><hr/> <br>
    
    
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
    <br><br>
    <a href="EditProfile">Edit Profile</a></p><br>
    <a href="EditProfile">Change</a></p><br>
    

  </fieldset>

      

</body>
</html>
<?php
include('footer.php');
?>
