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
			'categories014/index'
		) ?>">CANCEL</a>
	</div>

	<?php
	$cate_name = '';
	$description = '';

	if (isset($categories)) {
		$cate_name = $categories->cate_name_014;
		$description = $categories->description_014;
	}
	?>

	<div class="container">
		<form action="" method="post" class="row mt-5">
			<div class="col-md-12">
				<label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
				<input type="text" class="form-control" id="inputEmail3" value="<?= $cate_name ?>" name="cate_name_014"
					required>
			</div>
			<div class="col-12">
				<label for="inputEmail3" class="col-sm-2 col-form-label">description</label>
				<textarea type="text" class="form-control" id="inputEmail3" name="description_014"
					placeholder="$"><?= $description ?></textarea>
			</div>
			<div>
				<input type="submit" value="SAVE" class="btn btn-primary mt-4" name="submit">
				<input type="reset" value="RESET" name="reset" class="btn btn-primary mt-4">
			</div>
		</form>

	</div>
</body>