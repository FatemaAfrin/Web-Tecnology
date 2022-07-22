<?php 

require_once 'controller/productInfo.php';
$product = fetchProduct($_GET['id']);


 include "nav.php";



 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <form action="controller/updateProduct.php" method="POST" enctype="multipart/form-data">
  <label for="name">Name:</label><br>
  <input value="<?php echo $product['Name'] ?>" type="text" id="name" name="name"><br>


  <label for="number">Buying Price:</label><br>
  <input value="<?php echo $product['number'] ?>" type="number" id="number" name="number"><br>
  
  <label for="number">Selling Price:</label><br>
  <input value="<?php echo $product['number'] ?>" type="number" id="number" name="number"><br>
  <input type="file" name="image"><br><br>
  <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
  <input type="submit" name = "updateProduct" value="Update">
  <input type="reset"> 
</form> 

</body>
</html>

