<?php  
require_once 'controller/productInfo.php';

$products = fetchAllProducts();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Display</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<center><br><h1><u>Show All Products</u></h1><br></center>
	<div class="container">
		<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Buying Price</th>
      <th scope="col">Selling Price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	<tr>
		<?php foreach ($products as $i => $product_db): ?>
			<tr>
				<td><?php echo $product_db['name'] ?></td>
		        <td><?php echo $product_db['buyingprice'] ?></td>
		        <td><?php echo $product_db['sellingprice'] ?></td>
		        <td>
		        	<a href="showProduct.php?id=<?php echo $product_db['id'] ?>">Details</a>
		        	<a href="editProduct.php?id=<?php echo $product_db['id'] ?>">Edit</a>&nbsp
		        	<a href="controller/deleteProduct.php?id=<?php echo $product_db['id'] ?>">Delete</a>
		        </td>
				
			</tr>
		<?php endforeach; ?>
		
	</tr>
	</tbody>
</table>
	</div>
<!-- <H1>DISPLAY</H1>
<table>
	<thead>
		<tr>
			<th> Name </th>
			<th> Buying Price </th>
			<th> Selling Price </th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($products as $i => $product_db): ?>
			<tr>
				<td><a href="showProduct.php?id=<?php echo $product_db['id'] ?>"><?php echo $product_db['name'] ?></a></td>
		        <td><?php echo $product_db['buyingprice'] ?></td>
		        <td><?php echo $product_db['sellingprice'] ?></td>
		        <td><a href="editProduct.php?id=<?php echo $product_db['id'] ?>">Edit</a>&nbsp<a href="controller/deleteProduct.php?id=<?php echo $product_db['id'] ?>">Delete</a></td>
				
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>
 -->

</body>
</html>