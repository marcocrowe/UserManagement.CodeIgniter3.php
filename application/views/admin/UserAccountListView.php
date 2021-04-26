<main>
	<table class="table table-striped">
		<caption class="caption-top">List of User Accounts</caption>
		<thead>
			<tr>
				<th scope="col">Avatar</th>
				<th scope="col">Username</th>
				<th scope="col">Name</th>
				<th scope="col">email</th>
				<th scope="col">Active</th>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($userAccounts as $userAccount) : ?>
				<tr>
					<?php
					$userHasImage = isset($userAccount->Avatar);
					$imgAlt = $userHasImage ? $userAccount->Name : "";
					$imgSrc = $userHasImage ? $userAccount->Avatar : "avatarblank.png";
					?>
					<td><img alt="<?= $imgAlt; ?>" height="50px" src="<?= $imgSrc; ?>" width="50px" /></td>
					<th scope="row"><?= $userAccount->Username; ?></th>
					<td><?= $userAccount->Name; ?></td>
					<td><?= $userAccount->Email; ?></td>
					<td><?= $userAccount->Active; ?></td>
					<td><a href="view/<?= $userAccount->Id; ?>">View details</a></td>
					<td><a href="edit/<?= $userAccount->Id; ?>">Edit</a></td>
					<td><a href="password/<?= $userAccount->Id; ?>">Set password</a></td>
					<td><a href="delete/<?= $userAccount->Id; ?>">Delete</a></td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</main>
