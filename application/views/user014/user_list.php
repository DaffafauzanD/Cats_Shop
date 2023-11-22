<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('cats014/head');
$this->load->view('cats014/navbar');
?>

<div class="container-xxl mt-5">

	<body>
		<h1>CATSHOP 014</h1>
		<h3>USER LIST</h3>
		<a class="btn btn-primary" href="<?= base_url() ?>">Home</a>
		<a class="btn btn-primary" href="<?= site_url(
			'User014/add'
		) ?>">Add new user</a>
		<?= $this->session->flashdata('msg') ?>
		<hr>
		<div class="table-responsive">

			<table class="table">
				<tr>
					<th>No</th>
					<th>Name</th>
					<th>User Type</th>
					<th>Fullname</th>
					<th colspan="3" class="text-start">Action</th>
				</tr>
				<?php
				$i = 1;
				foreach ($user as $users) { ?>
				<tr>
					<td>
							<?= $i++ ?>
					</td>
					<td>
							<?= $users->username_014 ?>
					</td>
					<td>
							<?= $users->usertype_014 ?>
					</td>
					<td>
							<?= $users->fullname_014 ?>
					</td>
					<td><a href="<?= site_url(
						'User014/edit/' . $users->userid_014
					) ?>" class="btn btn-primary">Edit</a>
						</td>
						<td><a href="<?= site_url(
							'User014/resetpass/' . $users->userid_014 . '/' . $users->usertype_014
						) ?>" class="btn btn-primary">Reset password</a>
						</td>
						<td><a href="<?= site_url(
							'User014/delete/' . $users->userid_014
						) ?>" class="btn btn-primary">Delete</a>
						</td>
					</tr>
				<?php }
				?>
			</table>
		</div>

	</body>
</div>