<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('cats014/head');
$this->load->view('cats014/navbar');
?>

<body>
	<div class="container mt-5">
		<form class="" method="post" enctype="multipart/form-data">
			<h1>Change Photo</h1>
			<?= $this->session->flashdata('msg') ?>
			<div style="color:red;">
				<?= $error ?>
			</div>
			<div style="color: red;">
				<?= validation_errors() ?>
			</div>
			<div class="mb-3">
				<img src="<?php echo base_url('upload/users/' . $this->session->userdata('photo')) ?>"
					class="rounded mx-auto d-block change" alt="..." width="300" height="300" />
			</div>
			<div class="mb-3">
				<label for="formFile" class="form-label">NEW PHOTO</label>
				<input class="form-control" type="file" id="formFile" name="photo">
			</div>
			<input type="submit" value="UPLOAD PHOTO" class="btn btn-primary" name="upload">
		</form>
		<a class="btn btn-primary mt-3" href="<?= base_url(
		) ?>">CANCEL</a>
	</div>
</body>