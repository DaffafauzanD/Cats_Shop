<?php defined('BASEPATH') or exit('No direct script access allowed');
?>

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
	<link rel="stylesheet" href="<?php echo base_url('asset/css/style.css'); ?>">
	<script src="<?php echo base_url(
		'asset/bootstrap-5.3.0/js/bootstrap.bundle.min.js'
	); ?>"></script>

</head>

<body>
	<nav class="navbar navbar-expand-xl">
		<div class="container-fluid justify-content-around">
			<div>
				<div class="dropdown">
					<button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
						Menu
					</button>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="<?= site_url('cats014') ?>">Cats list</a></li>
						<li><a class="dropdown-item" href="<?= site_url(
							'Categories014'
						) ?>">Categories list</a></li>
						<?php if ($this->session->userdata('usertype') == 'Manager') { ?>
						   <li><a class="dropdown-item" href="<?= site_url('User014') ?>">User list</a></li>
						   <li><a class="dropdown-item" href="<?= site_url('cats014/sales') ?>">Report</a></li>
						<?php } ?>
						<li><a class="dropdown-item" href="<?= site_url('Auth014/changepass') ?>">Change password</a>
						</li>
						<li><a class="dropdown-item" href="<?= site_url('Auth014/changephoto') ?>">Change photo</a></li>
						<li><a class="dropdown-item" href="<?= site_url('Auth014/logout') ?>">logout</a></li>
					</ul>
				</div>
			</div>
			<div>
				<img class="gambar" src="<?php echo base_url('upload/users/' . $this->session->userdata('photo')) ?>"
					alt="" />
			</div>
			<div class="txt">
				<a class="navbar-brand" href="<?= base_url() ?>"><?= $this->session->userdata('username') ?>.</a>
			</div>
		</div>
	</nav>

	<div class="container-fluid justify-content-center profile">
		<div class="text-center">

		</div>
	</div>

	<div class="container mt-5 yo">
		<div class="contain">
			<div>
				<h1 class="display-1">CATSHOP</h1>
			</div>
		</div>

		<h3>Welcome
			<?= $this->session->userdata('username') ?> you login as
			<?= $this->session->userdata('usertype') ?>

		</h3>
		<hr>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda consequuntur voluptatibus distinctio
			molestias ea eum omnis ipsum officia quasi itaque. Sit dignissimos ipsam ut aspernatur ullam eius
			praesentium, voluptatibus reprehenderit!</p>
		<hr>
		<div class="button-card">
			<button class="btn kartu"><a href="">Create</a></button>
			<button class="btn kartu"><a href="">Read</a></button>
			<button class="btn kartu"><a href="">Update</a></button>
			<button class="btn kartu"><a href="">Delete</a></button>
		</div>
	</div>

	<div class="container">
		<div id="carouselExample" class="carousel slide">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="<?= base_url('asset/image/cat-1-5978274-1657215127376.jpg') ?>"
						class="d-block w-100 gambar_caro" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<figure class="text-center">
							<blockquote class="blockquote">
								<p>“There are two means of refuge from the misery of life — music and cats.”</p>
							</blockquote>
							<figcaption class="blockquote-footer" style="color:aliceblue;">
								Albert Schweitzer <cite title="Source Title">theologian</cite>
							</figcaption>
						</figure>
					</div>
				</div>
				<div class="carousel-item">
					<img src="<?= base_url('asset/image/how-much-do-cats-cost-header.jpg') ?>"
						class="d-block w-100 gambar_caro" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<figure class="text-start">
							<blockquote class="blockquote">
								<p>“Meow” means “woof” in cat.”</p>
							</blockquote>
							<figcaption class="blockquote-footer" style="color:aliceblue;">
								George Carlin <cite title=" Source Title">comedian</cite>
							</figcaption>
						</figure>
					</div>
				</div>
				<div class="carousel-item">
					<img src="<?= base_url('asset/image/cat-2083492__480.jpg') ?>" class="d-block w-100 gambar_caro"
						alt="...">
					<div class="carousel-caption d-none d-md-block">
						<figure class="text-end">
							<blockquote class="blockquote">
								<p>“What greater gift than the love of a cat.”</p>
							</blockquote>
							<figcaption class="blockquote-footer" style="color:aliceblue;">
								Charles Dickens <cite title=" Source Title">writer and social critic</cite>
							</figcaption>
						</figure>
					</div>
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
		<div class="desc">
			<div>

			</div>
		</div>
	</div>

	<div class="footer">
		<div class="content-footer">
			<!-- <h1 class="heading">CATSHOP 014</h1> -->
			<div class="list">
				<div>
					<p><a href="">Cats list</a></p>
				</div>
				<div>
					<p><a href="">User list</a></p>
				</div>
				<div>
					<p><a href="">Categories list</a></p>
				</div>
				<div>
					<p><a href="">Report Sale</a></p>
				</div>
			</div>
		</div>
		<div class="list">
			<div>
				<p><a href="">Instagram</a></p>
			</div>
			<div>
				<p><a href="">Twitter</a></p>
			</div>
			<div>
				<p><a href="">Facebook</a></p>
			</div>
		</div>
		<p class="copyrig"><small>Copyright ©2023 All rights reserved | This website made by Daple.</small></p>
	</div>



	<!-- <div class="container text-center mt-5 mb-5">
		<h1>CATSHOP 014</h1>
		<h3>APP MENU</h3>
	</div>

	<div class="container text-center">
		<img src="<?php echo base_url('upload/users/' . $this->session->userdata('photo')) ?>" width="200" height="200"
			alt="" />
		<div class="d-flex justify-content-around">

			<div class="card" style="width: 18rem;">
				<img src="<?= base_url('asset/image/black_cat_icon_177458.png') ?>" class="img-fluid rounded-start"
					alt="...">
				<div class="card-body">
					<p class="card-text"><a class="btn btn-primary" href="<?= site_url('cats014') ?>">Manage
							cats</a></p>
				</div>
			</div>
			<div class="card" style="width: 18rem;">
				<img src="<?= base_url('asset/image/category (1).png') ?>" class="img-fluid rounded-start" alt="...">
				<div class="card-body">
					<p class="card-text"><a class="btn btn-primary" href="<?= site_url(
						'Categories014'
					) ?>">Manage Categories</a></p>
				</div>
			</div>
			<?php if ($this->session->userdata('usertype') == 'Manager') { ?>
			   <div class="card" style="width: 18rem;">
				   <img src="<?= base_url('asset/image/vector60-5835-01.jpg') ?>" class="img-fluid rounded-start"
					   alt="...">
				   <div class="card-body">
					   <p class="card-text"><a class="btn btn-primary" href="<?= site_url('User014') ?>">Manage
							   user</a>
					   </p>
				   </div>
			   </div>
			   <div class="card" style="width: 18rem;">
				   <img src="<?= base_url() ?>asset/image/vector60-5835-01.jpg" class="img-fluid rounded-start" alt="...">
				   <div class="card-body">
					   <p class="card-text"><a class="btn btn-primary" href="<?= site_url('cats014/sales') ?>">Sale
							   Report</a>
					   </p>
				   </div>
			   </div>
			<?php } ?>
			<div class="card" style="width: 18rem;">
				<img src="<?= base_url() ?>asset/image/vector60-5835-01.jpg" class="img-fluid rounded-start" alt="...">
				<div class="card-body">
					<p class="card-text"><a class="btn btn-primary" href="<?= site_url('Auth014/changepass') ?>">Change
							password</a>
					</p>
				</div>
			</div>
			
			<div class="card" style="width: 18rem;">
				<img src="<?= base_url() ?>asset/image/vector60-5835-01.jpg" class="img-fluid rounded-start" alt="...">
				<div class="card-body">
					<p class="card-text"><a class="btn btn-primary" href="<?= site_url('Auth014/changephoto') ?>">Change
							photo</a>
					</p>
				</div>
			</div>
			<div class="card" style="width: 18rem;">
				<img src="<?= base_url() ?>asset/image/vector60-5835-01.jpg" class="img-fluid rounded-start" alt="...">
				<div class="card-body">
					<p class="card-text"><a class="btn btn-primary" href="<?= site_url('Auth014/logout') ?>">logout</a>
					</p>
				</div>
			</div>
		</div> -->
</body>








</html>
