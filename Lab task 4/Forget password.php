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
			<a href="public homepage.php">HOME</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="Login page.php">Login</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="Registration.php">Registration</a>&nbsp;&nbsp;&nbsp;&nbsp;
			
		</font><br><br>

<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    function test($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
   
    $email =test($_POST['email']);
    if(empty($email)) 
      { echo "Fields are empty";}     
      else 
       {

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format";
          }
          
          else{
            $password=" ";
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
                                    if ($email == $arr[$i]->Email) {
                                        $password=$arr[$i]->Password;							
                                        $flag=1;
                                        break;
                                    }
                                    else
                                    {
                                        $flag=0;
                                    }
                                }
                
                                if ($flag==1) {
                                    echo "<h3>Password:</h3>".$password;
                                }
                                else 
                                {
                                    echo "<h3>Invalid User</h3>";
                                }
                            }
            
                            
                        }
          }
        }
    

?>
  <fieldset>
    <legend>
  Forgot Password

    </legend>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method=post novalidate>
   
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