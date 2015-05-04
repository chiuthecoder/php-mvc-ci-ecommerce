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
<a href="#">Your Cart(3)</a>
You order:<form method="post" action="/orders/update">
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
		<tr>
			<td>T-Shirt</td>
			<td>$10</td>
			<td>
				<select name="qty">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				</select>
			</td>
			<td>
				
					<input type="hidden" name="" value="order_update">
					<input type="submit" value="Buy">
				
			</td>
		</tr>
	</tbody>
</table>
</form>	</div>

</div>

</body>
</html>