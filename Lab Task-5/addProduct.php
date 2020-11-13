<!DOCTYPE html>
<html>
<head>
	<title>ADD PRODUCT</title>
	<style type="text/css">
		fieldset {
		  background-color: #t;
		  width: 100%;
		}

		legend {
		  background-color: white;
		  color: black;
		  padding: 9px 30px;
		}
	</style>
</head>
<body>
	<left>
		<br><br><h1><u>ADD PRODUCT</u></h1><br><br>
		<form action="controller/createProduct.php" method="POST" enctype="multipart/form-data">
			<fieldset>
				<legend>Add product</legend><br>
				<label for="Name"> Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
				<input type="text" id="name" name="name"><br><br>
				<label for="buyingprice"> Buying Price </label>
				<input type="text" id="buyingprice" name="buyingprice"><br><br>
				<label for="sellingprice"> Selling Price </label>
				<input type="text" id="sellingprice" name="sellingprice"><br><br>
				<input type="radio" name="Display" herf=showALLProducts.php> Display <br><br>
				<input type="submit" name = "createProduct" value="Save" style="font-size: 500%;"><br><br> 
			</fieldset>
			
		</form>
	</center>
 <!-- <H1>ADD PRODUCT</H1>
 <form action="controller/createProduct.php" method="POST" enctype="multipart/form-data">
  
</form> 
 -->
</body>
</html>

