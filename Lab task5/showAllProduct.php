<?php  
require_once 'controller/productInfo.php';

$product = fetchAllProduct();


    include "nav.php";



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Buying Price</th>
			<th>Selling Price</th>
			
			<th>Profit</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($product as $i => $product): ?>
			<tr>
				<td><a href="showProduct.php?id=<?php echo $product['ID'] ?>"><?php echo $product['Name'] ?></a></td>
				<td><?php echo $product['buyingPrice'] ?></td>
				<td><?php echo $product['sellingPrice'] ?></td>
				<td><?php echo $product['profit'] ?></td>
				
				<td><a href="editProduct.php?id=<?php echo $product['ID'] ?>">Edit</a>&nbsp<a href="controller/deleteProduct.php?id=<?php echo $product['ID'] ?>" onclick="return confirm('Are you sure want to delete this ?')">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>