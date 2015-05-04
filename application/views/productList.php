<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Marketplace</title>
	<link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<?php
$this->load->library('table');

$this->table->set_heading('ID', 'Name', 'Price', 'Qty', 'Buy');

// $this->table->add_row('1', 'Coffee', '$15');

foreach ($listProduct as $p) {
$this->table->add_row($p->id, $p->name, $p->price, $p->qty, anchor('shoppingcart/buy/'.$p->id, 'Order Now'));
}

$template = array ( 'table_open'  => '<table border="1" cellpadding="2" cellspacing="5" class="mytable">' );
$this->table->set_template($template);
echo $this->table->generate();
?>
</body>
</html>