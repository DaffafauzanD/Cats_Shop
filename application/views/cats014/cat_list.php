<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('cats014/head');
$this->load->view('cats014/navbar');
?>

<div class="container-xxl mt-5">

	<body>
		<h1>CATSHOP 014</h1>
		<h3>CATS LIST</h3>
		<a class="btn btn-primary" href="<?= base_url() ?>">Home</a>
		<a class="btn btn-primary" href="<?= site_url(
			'Cats014/add'
		) ?>">Add new cat</a>
		<?= $this->session->flashdata('msg') ?>
		<hr>
		<div class="table-responsive">
			<table class="table">
				<tr>
					<th>No</th>
					<th>Name</th>
					<th>Type</th>
					<th>Gender</th>
					<th>Age(month)</th>
					<th>Price($)</th>
					<th colspan="3" class="text-start">Action</th>
				</tr>
				<?php
				foreach ($cats as $cat) { ?>
					<tr>
						<td>
							<?= $i++ ?>
						</td>
						<td>
							<?= $cat->name_014 ?>
						</td>
						<td>
							<?= $cat->type_014 ?>
						</td>
						<td>
							<?= $cat->gender_014 ?>
						</td>
						<td>
							<?= $cat->age_014 ?>
						</td>
						<td>
							<?= $cat->price_014 ?>
						</td>

						<td><a href="<?= site_url(
							'Cats014/edit/' . $cat->id_014
						) ?>" class="btn btn-primary">Edit</a>
						</td>
						<td>
							<?php if ($cat->sold_014 == 1)
								echo 'SOLD';
							else { ?>
								<a href="<?= site_url(
									'Cats014/sale/' . $cat->id_014
								) ?>" class="btn btn-primary">Sale</a>
							<?php } ?>
						</td>
						<td><a href="<?= site_url(
							'Cats014/delete/' . $cat->id_014
						) ?>" class="btn btn-primary">Delete</a>
						</td>
					</tr>
				<?php }
				?>
			</table>
			<?= $this->pagination->create_links(); ?>
		</div>


	</body>
</div>
