<?php
  session_start();
  if (!isset($_SESSION['username'])) {
    header("Location:Login.php");
  }
  ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>


   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

   <title>Product List</title>

 </head>

 <body>
   <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
     <div class="container-fluid">
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav me-auto mb-2 mb-lg-0">
           <li class="nav-item">
             <a class="nav-link" aria-current="page" href="DASHBOARD.php">Dashboard</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="ViewProfile.php ">View Profile</a>
           </li>

           <li class="nav-item">
             <a class="nav-link" href="EditProfile.php ">Edit Profile</a>
           </li>

           <li class="nav-item">
             <a class="nav-link" href="Product.php">Product List</a>
           </li>

           <li class="nav-item">
             <a class="nav-link" href="Logout.php">Logout</a>
           </li>

         </ul>
         <form class="d-flex">
           <input class="form-control me-2" type="search" onkeyup="searchProduct()" onchange="searchProduct()" id="search" placeholder="Search" aria-label="Search">
         </form>
       </div>
     </div>
   </nav>
   <h1>Welcome to Dashboard</h1>

   <table class="table table-striped">
     <thead>
       <tr clss="table-primary">
         <th scope="col">Product Id</th>
         <th scope="col">Product Name</th>
         <th scope="col">Product Category</th>
         <th scope="col">Model Number</th>
         <th scope="col">Img</th>
       </tr>
     </thead>
     <tbody id="tbody">

     </tbody>
   </table>

   <?php
    echo "<h2>Welcome," . $_SESSION['username'] . "</h2>";
    ?>
 </body>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <script>
   $(document).ready(function() {
     const xhttp = new XMLHttpRequest();
     xhttp.onload = function() {
       console.log(this.responseText);
       var products = this.responseText;
       document.getElementById("tbody").innerHTML = this.responseText;
     }
     xhttp.open("GET", "Controller/AllProduct.php");
     xhttp.send();
   });

   function searchProduct() {
     let q = document.getElementById("search").value;
     const xhttp = new XMLHttpRequest();
     xhttp.onload = function() {
       console.log(this.responseText);
       var products = this.responseText;
       document.getElementById("tbody").innerHTML = this.responseText;
     }
     xhttp.open("GET", "Controller/ProductList.php?q=" + q, true);
     xhttp.send();
   }
 </script>

 </html>
 <?php
  include('footer.php');
  ?>