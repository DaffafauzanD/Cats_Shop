<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('cats014/head');
$this->load->view('cats014/navbar');
?>

<div class="container-xxl mt-5">

	<body>
		<h1>CATSHOP 014</h1>
		<h3>SALE LIST</h3>
		<a class="btn btn-primary" href="<?= base_url() ?>">Home</a>
		<hr>
		<div class="table-responsive">
			<table class="table">
				<tr>
					<th>No</th>
					<th>Sale ID</th>
					<th>Sale Data</th>
					<th>Cat ID</th>
					<th>Customer Name</th>
					<th>Customer Address</th>
					<th>Customer Phone</th>
				</tr>
				<?php
				$i = 1;
				foreach ($sales as $sale) { ?>
					<tr>
						<td>
							<?= $i++ ?>
						</td>
						<td>
							<?= $sale->sale_id_014 ?>
						</td>
						<td>
							<?= $sale->sale_date_014 ?>
						</td>
						<td>
							<?= $sale->cat_id_014 ?>
						</td>
						<td>
							<?= $sale->customer_name_014 ?>
						</td>
						<td>
							<?= $sale->customer_address_014 ?>
						</td>
						<td>
							<?= $sale->customer_phone_014 ?>
						</td>
					<?php }
				?>
			</table>
		</div>
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title fs-5" id="exampleModalLabel">Delete</h1>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						Are you sure?
					</div>
					<div class="modal-footer">
						<a href="<?= site_url(
							'Cats014/delete/' . $cat->id_014
						) ?>" class="btn btn-danger">Yes!</a>
						<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
					</div>
				</div>
			</div>
		</div>
	</body>
</div>
