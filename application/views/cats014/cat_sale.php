<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('cats014/head');
$this->load->view('cats014/navbar');
?>

<body>
	<div class="container mt-5">
		<h1>CATSHOP 014</h1>
		<h3>CATS LIST</h3>
		<a class="btn btn-primary" href="<?= site_url(
			'Cats014/index'
		) ?>">CANCEL</a>
	</div>

	<form action="" method="post">
		<table>
			<tr>
				<td>Cat id</td>
				<td>
					<?= $cat->id_014 ?>
				</td>
			</tr>
			<tr>
				<td>Cat name</td>
				<td>
					<?= $cat->name_014 ?>
				</td>
			</tr>
			<tr>
				<td>Cat type</td>
				<td>
					<?= $cat->type_014 ?>
				</td>
			</tr>
			<tr>
				<td>Cat price</td>
				<td>
					<?= $cat->price_014 ?>
				</td>
			</tr>
			<tr>
				<td>customer name</td>
				<td><input type="text" name="customer_name_014"></td>
			</tr>
			<tr>
				<td>customer address</td>
				<td><textarea name="customer_address_014"></textarea></td>
			</tr>
			<tr>
				<td>customer phone</td>
				<td><input type="text" name="customer_phone_014"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SALE" name="submit">
					<a class="btn btn-primary" href="<?= site_url(
						'Cats014/index'
					) ?>">CANCEL</a>
				</td>

			</tr>

		</table>
	</form>

</body>