<?php 

	include_once "lib/php/functions.php";
	include_once "parts/templates.php";

	$cart = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` IN (3,11,5)");

	
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Item</title>

	<?php include "parts/meta.php"; ?>
</head>
<body> 

	<?php include "parts/navbar.php"; ?>

	<div class="container">	
			<h2>Your Cart</h2>
			<div class="grid gap">
				<div class="col-xs-12 col-md-7">
					<div class="card soft">
						<?= array_reduce($cart,'cartListTemplate') ?>	
					</div>
				</div>	
				<div class="col-xs-12 col-md-5">
					<div class="card soft flat">
						<div class="card-section display-flex">
							<div class="flex-stretch">Sub Total</div>
							<div class="flex-none cart_subtotal">&dollar;1196.97</div>
						</div>
						<div class="card-section display-flex">
							<div class="flex-stretch">Taxes</div>
							<div class="flex-none cart_subtotal">&dollar;104.73</div>
						</div>
						<div class="card-section display-flex">
							<div class="flex-stretch">Total</div>
							<div class="flex-none cart_subtotal">&dollar;1301.70</div>
						</div>												
					</div>
					<a href="product_checkout.php" class="form-button">Check Out</a>
				</div>
			</div>			
		</div>
	</div>

</body>
</html>
