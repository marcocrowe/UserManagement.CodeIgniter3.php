<?php $this->load->helper("url"); ?>
<main class="form-signin" style="width: 400px;">
	<form action="<?php echo base_url(); ?>index.php/login/manage/" method="post">
		<h1 class="h3 mb-3 fw-normal">Please sign in</h1>

		<label class="visually-hidden" for="inputEmail">Username</label>

		<?php $usernameValue = isset($username) ? 'value="' . $username . '"' : ""; ?>
		<input autofocus class="form-control" id="Username" name="Username" placeholder="Email address" required type="text" <?php echo $usernameValue ?>>

		<label class="visually-hidden" for="inputPassword">Password</label>

		<input class="form-control" id="Password" name="Password" placeholder="Password" required type="password">

		<div class="checkbox mb-3">
			<label><input type="checkbox" value="remember-me"> Remember me</label>
		</div>

		<button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>

		<?php if (isset($error)) { ?>
			<p class="error"><?php echo $error ?></p>
		<?php } ?>


		<p class="mt-5 mb-3 text-muted">&copy; 2017-2021</p>
	</form>
	<form action="<?php echo site_url("login/demo/"); ?>" method="post">
		<h2 class="h3 mb-3 fw-normal">Demo login</h2>
		<button class="w-100 btn btn-lg btn-primary" type="submit">Demo Login</button>
</main>