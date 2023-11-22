<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('cats014/head');
$this->load->view('cats014/navbar');
?>

<body>

	<div class="container mt-5">
		<a class="btn btn-primary mb-3 mt-5" href="<?= base_url(
		) ?>">CANCEL</a>
		<form class="" method="post" action="">
			<h1 class="heading">Change Password</h1>
			<?= $this->session->flashdata('msg') ?>
			<div style="color: red;">
				<?= validation_errors() ?>
			</div>
			<div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">Old password</label>
				<input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
					name="oldpassword">
			</div>
			<div class="mb-3">
				<label for="exampleInputPassword1" class="form-label">New Password</label>
				<input type="password" class="form-control" id="exampleInputPassword1" name="newpassword">
				<div id="emailHelp" class="form-text">Use special characters, example : $#@!%+.</div>
			</div>
			<input type="submit" value="change" class="btn btn-primary" name="change">
		</form>
	</div>

</body>