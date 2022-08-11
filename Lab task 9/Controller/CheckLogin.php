<?php
$flag = 0;
session_start();
require_once "../Model/Model.php";

if ($_SERVER['REQUEST_METHOD'] === "POST") {
  function test($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  $username = test($_POST['username']);
  $password = $_POST['password'];
  $remember = test($_POST['remember']);

  if (empty($username) or empty($password)) {
    echo "Fields are empty";
  } else {

    if (!preg_match("/^[a-zA-Z0-9._]*$/", $username)) {
      echo "username can contain alphanumeric characters, period, dash or underscore only";
    } else if (strlen($password) <= 7) {
      echo "password must not be less than eight  characters";
    } else {
      $obj = new model();

      $arr = $obj->login($username, $password);

      if ($arr == NULL) {
        echo "No record(s) found";
        $_SESSION['errormsg'] = "Log in failed";
        header("Location:../Login.php");
      } else {
        $_SESSION['username'] = $username;
        setcookie("username", $username, time() + 60); //1 day =  86400 second ,time()+60
        setcookie("password", $password, time() + 60); //1 day =  86400 second ,time()+60
        header("Location: ../Dashboard.php");
      }
    }
  }
}
