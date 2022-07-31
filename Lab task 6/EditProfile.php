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
 echo "<h2 style='text-align:left'>E-commerce Website</h2>";
		echo "<h4 style='margin-left:80%;'>
    Login as | <a href='Logout.php'>Logout</a></h4>";

    
      
		
 
?>
  
</fieldset>  


    <?php
    session_start();
    echo "<h2>Welcome,".$_SESSION['username']."</h2>";
    ?>
     <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method=post >
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
   
    <input type="submit">
  </fieldset>


     

   

</body>
</html>
