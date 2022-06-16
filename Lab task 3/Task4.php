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
    
    $name = test($_POST['name']);
    $email = test($_POST['email']);
    $username = test($_POST['uname']);
    $password = test($_POST['password']);
    $confirmpassword = test(@$_POST['confirmpassword']);
    $gender = test(@$_POST['gender']);
    $dateofbirth= test($_POST['dob']);

    if(empty($username) or empty($password)) 
      { echo "Fields are empty";}     
      else 
       {
        define("FILENAME", "data.json");
        $handle = fopen(FILENAME, "r");
        $fr = fread($handle, filesize(FILENAME)+1);
        $arr1 = json_decode($fr);
        $fc = fclose($handle);
                        $handle = fopen(FILENAME, "w");
        if ($arr1 === NULL) {
            $id = 1;
            $data = array('Id' => $id, 'Name' => $name, 'Email' => $email,'User Name' => $username,'Password' => $password,'Confirm Password' => $confirmpassword,'Gender' => $gender,'Date of Birth' => $dateofbirth);
            $data = array($data);
            $data = json_encode($data);
            $fw = fwrite($handle, $data);
        }
        else {
            $id = $arr1[count($arr1) - 1]->Id;
            $data = array('Id' => $id+1, 'Name' => $name, 'Email' => $email,'User Name' => $username,'Password' => $password,'Confirm Password' => $confirmpassword,'Gender' => $gender,'Date of Birth' => $dateofbirth);
            $arr1[] = $data;
            $data = json_encode($arr1);
            $fw = fwrite($handle, $data);
        }
        $fc = fclose($handle);

        if ($fw) {
            echo "<h3>Data Insertion Successful</h3>";
        }
    }
       }
    

?>
  <fieldset>
    <legend>
  REGISTRATION

    </legend>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method=post novalidate>
    <label> Name:</label>
    <input type="text" name=" name" id="name"><br><hr/> <br>
    <label>Email:</label>
    <input type="email" name=" email" id="email"><br><hr/> <br>
    <label>User Name:</label>
    <input type="text" name=" uname" id="uname"><br><hr/> <br>
    <label>Password:</label>
    <input type="password" name=" password" id=" password"><br><hr/>
    <label>Confirm Password:</label>
    <input type="password" name="confirmpassword" id="confirmpassword"><br><hr/>
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

    
<input type="submit">
<input type="Reset">

</form>
</fieldset>  

</body>
</html>