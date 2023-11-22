<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('cats014/head');
$this->load->view('cats014/navbar');
?>

<body>
	<div class="container mt-5">
		<h1>CATSHOP 014</h1>
		<h3>USER FORM</h3>
		<a class="btn btn-primary" href="<?= site_url(
			'User014/index'
		) ?>">CANCEL</a>
	</div>

	<?php
	$name = '';
	$type = '';
	$fullname = '';

	if (isset($user)) {
		$name = $user->username_014;
		$type = $user->usertype_014;
		$fullname = $user->fullname_014;
	}
	?>

	<div class="container">
		<form action="" method="post" class="row mt-5">
			<div class="col-md-12">
				<label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
				<input type="text" class="form-control" id="inputEmail3" value="<?= $name ?>" name="username_014"
					required>
			</div>
			<fieldset class="col-md-4">
				<legend class="col-form-label col-sm-2 pt-0">user type</legend>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="usertype_014" id="gridRadios1" value="Manager"
						<?= $type == 'Manager' ? 'checked' : '' ?>>
					<label class="form-check-label" for="gridRadios1">
						Manager
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="usertype_014" id="gridRadios2" value="Cashier"
						<?= $type == 'Cashier' ? 'checked' : '' ?>>
					<label class="form-check-label" for="gridRadios2">
						Cashier
					</label>
				</div>
			</fieldset>
			<div class="col-md-12">
				<label for="inputEmail3" class="col-sm-2 col-form-label">fullname</label>
				<input type="text" class="form-control" id="inputEmail3" value="<?= $fullname ?>" name="fullname_014"
					required>
			</div>
			<div>
				<input type="submit" value="SAVE" class="btn btn-primary mt-4" name="submit">
				<input type="reset" value="RESET" name="reset" class="btn btn-primary mt-4">

			</div>
		</form>
		</d iv>
</body>