<?php $this->load->helper("url"); ?>
<div class="panel">
	<h2>Unauthorized Access</h2>
	<?php if (isset($unauthorizedPath)) {
		echo "<p>" . $unauthorizedPath . "</p>";
	} ?>
	<p><a href="<?= site_url("login/"); ?>">Click here to login.</a></p>
</div>
