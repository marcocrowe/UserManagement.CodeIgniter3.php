<?php $this->load->helper("url"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title><?= $pageTitle; ?></title>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous" />
</head>

<body style="margin:auto; width: 900px;">
	<header>
		<h1><a href="<?= base_url(); ?>">User Management Example</a></h1>
		<?php if (isset($loggedIn) && $loggedIn) :  ?>
			<div>Logged in as: <?= $username ?></div>
		<?php endif ?>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
			<div class="container">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= site_url('admin/products/'); ?>">Products</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= site_url('admin/useraccounts/'); ?>">User Accounts</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= site_url("logout/"); ?>">Logout</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<?= $mainContent; ?>
	<footer>
		<p class="mt-5 mb-3 text-muted">Copyright &copy; 2021 Mark Crowe <a href="https://github.com/markcrowe-com">https://github.com/markcrowe-com</a>. All rights reserved.</p>
	</footer>
</body>

</html>
