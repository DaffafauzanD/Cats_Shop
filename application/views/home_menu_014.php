<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="<?php echo base_url(
		'asset/bootstrap-5.3.0/css/bootstrap.min.css'
	); ?>">
	<link rel="stylesheet" href="<?php echo base_url(
		'asset/css/style.css'
	); ?>">
	<script src="<?php echo base_url(
		'asset/bootstrap-5.3.0/js/bootstrap.bundle.min.js'
	); ?>"></script>

</head>

<body>
	<div class="container text-center mt-5 mb-5">
		<h1>CATSHOP 014</h1>
		<h3>APP MENU</h3>
	</div>

	<div class="container text-center">
		<div class="d-flex justify-content-around">
			<div class="card" style="width: 18rem;">
				<img src="asset/image/black_cat_icon_177458.png" class="img-fluid rounded-start" alt="...">
				<div class="card-body">
					<p class="card-text"><a class="btn btn-primary" href="<?= site_url('cats014') ?>">Manage
							cats</a></p>
				</div>
			</div>
			<div class="card" style="width: 18rem;">
				<img src="asset/image/category (1).png" class="img-fluid rounded-start" alt="...">
				<div class="card-body">
					<p class="card-text"><a class="btn btn-primary" href="<?= site_url(
						'Categories014'
					) ?>">Manage Categories</a></p>
				</div>
			</div>
			<div class="card" style="width: 18rem;">
				<img src="asset/image/vector60-5835-01.jpg" class="img-fluid rounded-start" alt="...">
				<div class="card-body">
					<p class="card-text"><a class="btn btn-primary" href="<?= site_url('cats014') ?>">Manage user</a>
					</p>
				</div>
			</div>
			<div class="card" style="width: 18rem;">
				<img src="asset/image/vector60-5835-01.jpg" class="img-fluid rounded-start" alt="...">
				<div class="card-body">
					<p class="card-text"><a class="btn btn-primary" href="<?= site_url('cats014/sales') ?>">Sale
							Report</a>
					</p>
				</div>
			</div>
			<div class="card" style="width: 18rem;">
				<img src="asset/image/vector60-5835-01.jpg" class="img-fluid rounded-start" alt="...">
				<div class="card-body">
					<p class="card-text"><a class="btn btn-primary" href="<?= site_url('cats014') ?>">logout</a>
					</p>
				</div>
			</div>
		</div>
</body>

</html>
