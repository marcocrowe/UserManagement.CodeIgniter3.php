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
			<?php foreach ($userAccounts as $userAccount) { ?>
				<tr>
					<?php
					$userHasImage = isset($userAccount->Avatar);
					$imgAlt = $userHasImage ? $userAccount->Name : "";
					$imgSrc = $userHasImage ? $userAccount->Avatar : "avatarblank.png";
					?>
					<td><img alt="<?php echo $imgAlt; ?>" height="50px" src="<?php echo $imgSrc; ?>" width="50px" /></td>
					<th scope="row"><?php echo $userAccount->Username; ?></th>
					<td><?php echo $userAccount->Name; ?></td>
					<td><?php echo $userAccount->Email; ?></td>
					<td><?php echo $userAccount->Active; ?></td>
					<td><a href="view/<?php echo $userAccount->Id; ?>">View details</a></td>
					<td><a href="edit/<?php echo $userAccount->Id; ?>">Edit</a></td>
					<td><a href="password/<?php echo $userAccount->Id; ?>">Set password</a></td>
					<td><a href="delete/<?php echo $userAccount->Id; ?>">Delete</a></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</main>