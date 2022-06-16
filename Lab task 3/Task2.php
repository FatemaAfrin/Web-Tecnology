<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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

</body>
</html>