<?php $this->load->helper("url"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title><?php echo $pageTitle; ?></title>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body style="margin:auto; width: 800px;">
	<header>
		<h1><a href="<?php echo base_url(); ?>">User Management Example</a></h1>
		<?php if (isset($loggedIn) && $loggedIn) {  ?>
			<div>Logged in as: <?php echo $username ?></div>
		<?php } ?>
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
							<a class="nav-link" href="<?php echo site_url('useraccounts/'); ?>">User Accounts</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo site_url('shoppingcart/'); ?>">Cart</a>
						</li>
						<?php if (isset($loggedIn) && $loggedIn) {  ?>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo site_url("logout/"); ?>">Logout</a>
							</li>
						<?php } else {  ?>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo site_url("login/"); ?>">Login</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo site_url("register"); ?>">Register</a>
							</li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<?php echo $mainContent; ?>
	<footer>
		<hr/>
		<p>Copyright &#169; 2020 Mark Crowe <a href="https://github.com/markcrowe-com">https://github.com/markcrowe-com</a>. All rights reserved.</p>
	</footer>
</body>

</html>