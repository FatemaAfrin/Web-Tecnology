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