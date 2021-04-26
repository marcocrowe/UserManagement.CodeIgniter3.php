<?php $this->load->helper("url"); ?>
<?php $usernameValue = isset($username) ? 'value="' . $username . '"' : ""; ?>
<main class="form-signin" style="width: 400px;">
	<form action="<?= site_url("AdminLogin/login/"); ?>" method="post">
		<h3 class="h3 mb-3 fw-normal">Admin Login</h3>

		<label class="visually-hidden" for="inputEmail">Username</label>
		<input autofocus class="form-control" id="Username" name="Username" placeholder="Email address" required type="text" <?= $usernameValue ?>>

		<label class="visually-hidden" for="inputPassword">Password</label>
		<input class="form-control" id="Password" name="Password" placeholder="Password" required type="password">

		<div class="checkbox mb-3"><label><input type="checkbox" value="remember-me"> Remember me</label></div>
		<button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>

		<?php if (isset($error)) : ?>
			<p class="error"><?= $error ?></p>
		<?php endif ?>
	</form>
	<form action="<?= site_url("AdminLogin/login/"); ?>" method="post">
		<h2 class="h3 mb-3 fw-normal">Demo login</h2>
		<button class="w-100 btn btn-lg btn-primary" type="submit">Demo Login</button>
	</form>
</main>
