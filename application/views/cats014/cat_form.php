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

    <?php
	$name = '';
	$type = '';
	$gender = '';
	$age = '';
	$price = '';

	if (isset($cat)) {
		$name = $cat->name_014;
		$type = $cat->type_014;
		$gender = $cat->gender_014;
		$age = $cat->age_014;
		$price = $cat->price_014;
	}
	?>

    <div class="container">
        <form action="" method="post" class="row mt-5">
            <div class="col-md-12">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                <input type="text" class="form-control" id="inputEmail3" value="<?= $name ?>" name="name_014" required>
            </div>
            <div class="col-md-12">
                <label for="inputState" class="form-label">type</label>
                <select id="inputState" class="form-select" name="type_014">
                    <option value="" selected>Choose type</option>

                    <?php foreach ($categories as $cate) { ?>
                    <option value="<?= $cate->cate_name_014 ?>" <?= set_select(
						 	'type_014',
						 	$cate->cate_name_014,
						 	$type == $cate->cate_name_014 ? true : false
						 ) ?>><?= $cate->cate_name_014 ?></option>
                    <?php } ?>

                    <!-- <option value="Domestic" <?= set_select(
						'type_014',
						'Domestic',
						$type == 'Domestic' ? true : false
					) ?>
						>Domestic</option>
					<option value="Angora" <?= $type == 'Angora'
						? 'selected'
						: '' ?>>Angora</option>
					<option value="Persia" <?= $type == 'Persia'
						? 'selected'
						: '' ?>>Persia</option> -->
                </select>
            </div>
            <fieldset class="col-md-4">
                <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender_014" id="gridRadios1" value="Female"
                        <?= $gender == 'Female' ? 'checked' : '' ?>>
                    <label class="form-check-label" for="gridRadios1">
                        Female
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender_014" id="gridRadios2" value="Male"
                        <?= $gender == 'Male' ? 'checked' : '' ?>>
                    <label class="form-check-label" for="gridRadios2">
                        Male
                    </label>
                </div>
            </fieldset>
            <div class="col-12">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Age</label>
                <input type="number" class="form-control" id="inputEmail3" name="age_014" value="<?= $age ?>"
                    placeholder="month">
            </div>
            <div class="col-12">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Price</label>
                <input type="number" class="form-control" id="inputEmail3" name="price_014" value="<?= $price ?>"
                    placeholder="$">
            </div>
            <div>
                <input type="submit" value="SAVE" class="btn btn-primary mt-4" name="submit">
                <input type="reset" value="RESET" name="reset" class="btn btn-primary mt-4">

            </div>
        </form>



        </d iv>
</body>