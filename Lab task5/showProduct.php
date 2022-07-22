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

<table>
	<tr>
		<th>Name</th>
		<th>Buying Price</th>
		<th>Selling Price</th>
		<th>Profit</th>
		<th>Action</th>
	</tr>
	<tr>
		<td><a href="showProduct.php?id=<?php echo $product['ID'] ?>"><?php echo $product['Name'] ?></a></td>
		<td><?php echo $product['buyingPrice'] ?></td>
		<td><?php echo $product['sellingPrice'] ?></td>
		<td><?php echo $product['profit'] ?></td>
		<td><img width="100px" src="uploads/<?php echo $product['image'] ?>" alt="<?php echo $product['Name'] ?>"></td>
	</tr>

</table>


</body>
</html>