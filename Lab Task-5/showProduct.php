<?php  
require_once 'controller/productInfo.php';

$product_db = fetchProduct($_GET['id']);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Product Details</title>
	<style type="text/css">
		fieldset {
		  background-color: #eeeeee;
		  width: 50%;
		}

		legend {
		  background-color: gray;
		  color: white;
		  padding: 5px 10px;
		}
		a{
			text-decoration: none;
			font-size: 130%;
		}
	</style>
</head>
<body>
	<center>
		<br><br><h1><u>PRODUCT DETAILS</u></h1><br><br>
		<form action="controller/createProduct.php" method="POST" enctype="multipart/form-data">
			<fieldset>
				<legend>My product</legend><br>
				<label for="name"> Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
				<?php echo $product_db['name'] ?><br><br>
				<label for="buyingprice"> Buying Price </label>
				<?php echo $product_db['buyingprice'] ?><br><br>
				<label for="sellingprice"> Selling Price </label>
				<?php echo $product_db['sellingprice'] ?><br><br>
				<button><a href="./showAllProducts.php">Back</a></button>
			</fieldset>
			
		</form>
	</center>



</body>
</html>