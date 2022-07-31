<?php
$flag=0;
session_start();

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

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    function test($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    $username = test($_POST['username']);
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
            else if (strlen($password) <= 7) {
            echo "password must not be less than eight  characters";
          }      
          else{
            $conn = db_conn();
            echo $username;
            echo $password;
            $selectQuery = "SELECT * FROM `registration` where username = ? and password = ?";
    
            try {
                $stmt = $conn->prepare($selectQuery);
                $stmt->execute([$username, $password]);
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
            $arr = $stmt->fetch(PDO::FETCH_ASSOC);
            $conn = null;
    
        if ($arr === NULL) {
            echo "No record(s) found";
            $_SESSION['errormsg']="Log in failed";

            header("Location:Login.php");
        }
        else
        {
          $_SESSION['username']=$username;
          setcookie("username",$username ,time()+60); //1 day =  86400 second ,time()+60
         header("Location:Dashboard.php");
        }
        
        }
    }
            
          }
        
    

?>