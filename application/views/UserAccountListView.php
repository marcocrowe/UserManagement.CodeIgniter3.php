<!DOCTYPE html>
<html lang="en">

<head>
	<title>User Accounts</title>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
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
</body>

</html>