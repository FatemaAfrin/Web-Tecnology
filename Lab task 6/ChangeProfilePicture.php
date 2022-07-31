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


    <?php
    session_start();
    echo "<h2>Welcome,".$_SESSION['username']."</h2>";
    ?>

<form action="uploadfile.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
<input type="submit" value="Upload Image" name="submit">


  </fieldset>

  
		
   

	

</body>
</html>
<?php
include('footer.php');
?>





  

