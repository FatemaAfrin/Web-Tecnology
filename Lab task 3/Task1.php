<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
</head>
<body>

<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    function test($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    $username = test($_POST['uname']);
    $password = test($_POST['password']);

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
          }      else if (!preg_match("$%@#", $password) ) {
            echo "password must contain at least one of the special characters (@,#,$,%)";
          }
          else{
            echo $username ."<br><br>";
            echo $password ;
            
          }
        }
    
}
?>
  <fieldset>
    <legend>
  LOGIN

    </legend>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method=post novalidate>
    <label>User Name:</label>
    <input type="text" name=" uname" id="uname"><br> <br>
    
    <label>Password:</label>
    <input type="password" name=" password" id=" password"><br><hr/>
   
    <input type="checkbox" id=" " name=" " value=" ">
<label for=" ">Remember Me</label><br><br>


<input type="submit">
<a href="#">Forget Password?</a>

</form>
</fieldset>  

</body>
</html>