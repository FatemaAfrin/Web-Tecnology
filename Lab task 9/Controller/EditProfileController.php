<?php

require_once "../Model/Model.php";

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    function test($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $data = array();

    $data["name"] = test($_POST['name']);
    $data["email"] = test($_POST['email']);
    $data["username"] = test($_POST['username']);
    $data["gender"] = test($_POST['gender']);
    $data["dob"]= test($_POST['dob']);

    $create_account = new model();
    $val = $create_account->updateUser($data);

    if($val){
        echo "Account updated";
        return "success";
    }else{
        return "error";
    }

    } 

?>