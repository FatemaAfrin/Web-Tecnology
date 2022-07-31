<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    function test($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function db_conn()
    {
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "test";

      try {
          $conn = new PDO('mysql:host='.$servername.';dbname='.$dbname.';charset=utf8', $username, $password);
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
          } catch (PDOException $e) {
              echo $e->getMessage();
          }
      return $conn;
     }
    
    $name = test($_POST['name']);
    $email = test($_POST['email']);
    $username = test($_POST['uname']);
    $password = test($_POST['password']);
    $confirmpassword = test(@$_POST['confirmpassword']);
    $gender = test(@$_POST['gender']);
    $dateofbirth= test(@$_POST['dob']);

    if(empty($username) or empty($password)) 
      { echo "Fields are empty";}     
      else 
       {
        $conn = db_conn();
        $insertQuery = "INSERT into registration (name, email, username,password, gender, dob)
        VALUES (:name, :email, :username, :password, :gender, :dob)";
            try{
                $stmt = $conn->prepare($insertQuery);
                $stmt->execute([
                    ':name'               =>     $name,
                    ':email'          =>      $email,
                    ':username'     =>     $username,
                    ':password'     =>     $password,
                    ':gender'     =>      $gender,
                    ':dob'     =>      $dateofbirth
                ]);

            }catch(PDOException $e){
                echo "create_2 ".$e->getMessage();
            }
            $conn = null;
            header("Location:Login.php");
    
     
    

       }
    } 

?>