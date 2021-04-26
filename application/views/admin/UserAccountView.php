<main>
	<?php $this->load->helper("url"); ?>
	<div>
		<a href="<?= site_url("useraccounts/edit/" . $userAccount->Id); ?>">Edit</a>
		<a href="<?= site_url("useraccounts/password/" . $userAccount->Id); ?>">Set Password</a>
		<a href="<?= site_url("useraccounts/delete/" . $userAccount->Id); ?>">Delete</a>
		<div>
			<table class="table">
				<caption class="caption-top">User Account Details</caption>
				<tbody>
					<tr>
						<th scope="row">Username</th>
						<td><?= $userAccount->Username; ?></td>
					</tr>
					<tr>
						<th scope="row">Name</th>
						<td><?= $userAccount->Name; ?></td>
					</tr>
					<tr>
						<th scope="row">email</th>
						<td><?= $userAccount->Email; ?></td>
					</tr>
					<tr>
						<th scope="row">Active</th>
						<td><?= $userAccount->Active; ?></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div>
			<?php
			$userHasImage = isset($userAccount->Avatar);
			$imgAlt = $userHasImage ? $userAccount->Name : "";
			$imgSrc = $userHasImage ? $userAccount->Avatar : "avatarblank.png";
			?>
			<img alt="<?= $imgAlt; ?>" height="50px" src="<?= $imgSrc; ?>" width="50px" />
		</div>
	</div>
</main>
