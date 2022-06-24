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
		<font face="Lato" size="6">XCompany</font>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
		<font face="cinzel" size="4">
        <a href="public homepage.php">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;
			 <a href="Login page.php">Login</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="Registration.php">Registration</a>&nbsp;&nbsp;&nbsp;&nbsp;
			
		</font><br><br>

<?php
$flag=0;
session_start();
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    function test($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    $username = test($_POST['uname']);
    $password = test($_POST['password']);
    $remember = test($_POST['remember']);
    if(empty($username) or empty($password)) 
      { echo "Fields are empty";}     
      else 
       {

         if (!preg_match("/^[a-zA-Z0-9._]*$/",$username)) {
            echo "username can contain alphanumeric characters, period, dash or underscore only";
          }
          //else if (!preg_match("[a-zA-Z]",$username)) {
           // echo "username must contain at least two (2) characters";
          //}    
            else if (strlen($password) <= 8) {
            echo "password must not be less than eight  characters";
          }      
          else{
           
        define("FILENAME", "data.json");
        $handle = fopen(FILENAME, "r");
        $fr = fread($handle, filesize(FILENAME)+1);
        $arr = json_decode($fr);
        $fc = fclose($handle);
        if ($arr === NULL) {
            echo "No record(s) found";
        }
        else
        {
            for ($i = 0; $i < count($arr); $i++) {
                if($arr[$i]->UserName==$username and $arr[$i]->Password==$password)
                {
                    $name=$arr[$i]->UserName;
                    $flag=1;
                    break;
                } 
             }
             if($flag==1 and $remember=="on")
             {
                 $_SESSION['username']=$name;
                 setcookie("username",$name); //1 day =  86400 second ,time()+60
                header("Location:DASHBOARD.php");
                 
             }
  
            
            else
              {
                  $_SESSION['errormsg']="Log in failed";

                   header("Location:Login page.php");
               }
        }
    }
            
          }
        }
    

?>
  <fieldset>
    <legend>
  LOGIN

    </legend>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method=post novalidate>
    <!-- <label>User Name:</label> -->
    <!-- <input type="text" name=" uname" id="uname"><br> <br>
    
    <label>Password:</label>
    <input type="password" name=" password" id=" password"><br><hr/>
   
    <input type="checkbox" id=" " name=" " value=" ">
<label for=" ">Remember Me</label><br><br> -->






<?php
    if(isset($_SESSION['errormsg']))
    {
        echo "<p>". $_SESSION['errormsg'] . "</p>";
    }
    ?>
	 <br>
	Username:
	<input type="text" name="uname">
	<br>
	Password:
	<input type="password" name="password">
	<br>
	<br>
    <input id="remember" type="checkbox" name="remember" > <label for="remember">Remember Me</label>
	<br>
	<input type="submit" name="submit" value="Submit">


    
<a href="Forget password.php">Forget Password</a>

</form>
</fieldset>  

</body>
</html>
<?php
include('footer.php');
?>