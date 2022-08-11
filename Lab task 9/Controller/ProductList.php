<?php

require_once "../Model/Model.php";

    $q = $_GET["q"];
    $obj = new model();
    $products = $obj->getProduct($q);
    
    $data = "";
    foreach ($products as $product){
        $st  = "<tr><td scope='row'>".$product['id'] . "</td><td>" . $product["name"] . "</td><td>" . $product['category'] . "</td><td>" . $product['model'] . "</td><td><img src=" . $product['img'] . " class='rounded float-start' width='200' height='200' alt='...'></td></tr>";
        $data = $data .  $st;
    }
    echo $data;


?>