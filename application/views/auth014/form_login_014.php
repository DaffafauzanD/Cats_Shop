<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cts</title>
	<link rel="stylesheet" href="<?php echo base_url(
		'asset/bootstrap-5.3.0/css/bootstrap.min.css'
	); ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('asset/css/style.css'); ?>">
	<script src="<?php echo base_url(
		'asset/bootstrap-5.3.0/js/bootstrap.bundle.min.js'
	); ?>"></script>

</head>

<body>
	<div class="test">
		<div class="container d-flex justify-content-center">
			<form class="" method="post" action="">
				<img src="<?= base_url('asset/image/black_cat_icon_177458.png') ?>" class="rounded mx-auto d-block gbr"
					alt="...">
				<h1 class="heading">Cat shop</h1>
				<?= $this->session->flashdata('msg') ?>
				<div style="color: red;">
					<?= validation_errors() ?>
				</div>
				<div class="mb-3 form_log">
					<label for="exampleInputEmail1" class="form-label">Username</label>
					<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
						name="username">
					<div id="emailHelp" class="form-text">Insert correctly username.</div>
				</div>
				<div class="mb-3 form_log">
					<label for="exampleInputPassword1" class="form-label">Password</label>
					<input type="password" class="form-control" id="exampleInputPassword1" name="password">
				</div>
				<input type="submit" value="login" class="btn btn-primary" name="login">
			</form>
		</div>
	</div>
</body>

</html>