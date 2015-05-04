<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="enÍ">
<head>
	<meta charset="utf-8">
	<title>Welcome to Marketplace</title>
	<link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>

<div class="wrapper">

	<div class="container">
		<h2>Welcome to shopping channel</h2>



<h3>Checkout</h3>

<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Price</th>
			<th>QTY</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>




<?php
foreach ($items as $item) {
?>

		<tr>
			
			<td><?= $item['name']; ?></td>
			<td><?= $item['price']; ?></td>
			<td>
				<?= $item['qty']; ?>
			</td>
			<td>
					<input type="hidden" name="sum" value="<?= $item['price']*$item['qty']; ?>">
					<input type="hidden" name="id" value="<?= $item['id']; ?>">
					<input type="hidden" name="cart" value="delete_order">
					<input type="submit" value="Delete">
				
			</td>
		</tr>
<?php
}
?>
		<tr>
			<td colspan="4">
					total: $xxx
				
			</td>
		</tr>
		<tr>
			<td colspan="4">
					<input type="hidden" name="id" value="<?= $item['id']; ?>">
					<input type="hidden" name="cart" value="order_update">
					<input type="submit" value="Order">
				
			</td>
		</tr>
	</tbody>
</table>
</div>

</div>

</body>
</html>