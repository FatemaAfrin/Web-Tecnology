<?php

require_once "C:/xampp/htdocs/Final Project/Model/Model.php";

 function profile($username){
    $obj = new model();
    $profile = $obj->viewProfile($username);
    
    return $profile;
 }
?>