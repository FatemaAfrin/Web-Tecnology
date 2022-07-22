<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <?php 
        include "nav.php";

     ?>
   

 <form action="controller/createProduct.php" method="POST" enctype="multipart/form-data">
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br>

  <label for="number">Buying Price:</label><br>
  <input type="number" id="number" name="number"><br>

  <label for="number">Selling Price:</label><br>
  <input type="number" id="number" name="number"><br>

  <input type="file" name="image"><br><br>
  <input type="submit" name = "createProduct" value="Create">
  <input type="reset"> 
</form> 

</body>
</html>

