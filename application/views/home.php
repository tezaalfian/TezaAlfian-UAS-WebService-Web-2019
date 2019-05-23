<!DOCTYPE HTML>
<html>
	<head>
		<title>Intensify by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="<?= base_url();?>vendor_asset/css/main.css" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
		<link href="<?= base_url();?>vendor_asset/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<style type="text/css">
			#banner {
				padding: 14em 0 12em 0;
				background-image: url("<?= base_url();?>vendor_asset/cak.png");
				background-size: cover;
				background-position: center top;
				background-repeat: no-repeat;
				text-align: center;
			}
		</style>

	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<a href="<?= base_url();?>" class="logo">Today's Weather</a>
			</header>

		<!-- Banner -->
			<section id="banner">
				<div class="content">
					<h1 class="text-info">Selamat Datang</h1>
					<p>Silahkan Lihat Cuaca di Daerah Anda</p>
					<ul class="actions">
						<li><a href="#one" class="button scrolly text-white">Get Started</a></li>
					</ul>
				</div>
			</section>

		<!-- One -->
			<section id="one" class="wrapper">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<center><h1 class="text-info">Cuaca Hari Ini</h1></center><br>
							<table class="table">
							  <thead class="thead-dark">
							    <tr>
							      <th scope="col">Kota</th>
							      <th scope="col">Siang</th>
							      <th scope="col">Malam</th>
							      <th scope="col">Dini Hari</th>
							      <th scope="col">Suhu</th>
							      <th scope="col">Kelembapan</th>
							    </tr>
							  </thead>
							  <tbody>
							  	<?php foreach ($data as $value) { ?>
							    <tr>
							      <td><?= $value['Kota'] ?></td>
							      <td><?= $value['siang'] ?></td>
							      <td><?= $value['malam'] ?></td>
							      <td><?= $value['dini_hari'] ?></td>
							      <td><?= $value['suhu'] ?></td>
							      <td><?= $value['Kelembapan'] ?></td>
							    </tr>
							    <?php } ?>
							  </tbody>
							</table>
						</div>
					</div>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<h2>About Us</h2>
					<ul class="actions">
						<li><span class="icon fa-phone"></span>0896-3190-2592</li>
						<li><span class="icon fa-envelope"></span>weather@gmail.com</li>
						<li><span class="icon fa-map-marker"></span>Jl. Merbabu RT.02/10, Los Angeles</li>
					</ul>
				</div>
				<div class="copyright">
					&copy; Copyright by <b class="text-white">Teza Alfian</b>
				</div>
			</footer>

		<!-- Scripts -->
  			<script src="<?= base_url();?>vendor_asset/bootstrap/js/bootstrap.bundle.min.js"></script>
			<script src="<?= base_url();?>vendor_asset/js/jquery.min.js"></script>
			<script src="<?= base_url();?>vendor_asset/js/jquery.scrolly.min.js"></script>
			<script src="<?= base_url();?>vendor_asset/js/skel.min.js"></script>
			<script src="<?= base_url();?>vendor_asset/js/util.js"></script>
			<script src="<?= base_url();?>vendor_asset/js/main.js"></script>

	</body>
</html>