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
    $data["password"] = test($_POST['password']);
    $data["gender"] = test($_POST['gender']);
    $data["dob"]= test($_POST['dob']);

    $create_account = new model();
    $val = $create_account->addUser($data);

    if($val){
        return "success";
    }else{
        return "error";
    }

    } 

?>