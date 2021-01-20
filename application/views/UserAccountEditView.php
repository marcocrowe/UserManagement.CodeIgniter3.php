<!DOCTYPE html>
<html lang="en">

<head>
	<title>User Accounts</title>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
	<div>
		<a href="edit/<?php echo $userAccount->Id; ?>">Edit</a>
		<a href="password/<?php echo $userAccount->Id; ?>">Set password</a>
		<a href="delete/<?php echo $userAccount->Id; ?>">Delete</a>
		<div>
			<table class="table">
				<caption class="caption-top">User Account Details</caption>
				<tbody>
					<tr>
						<th scope="row">Username</th>
						<td><?php echo $userAccount->Username; ?></td>
					</tr>
					<tr>
						<th scope="row">Name</th>
						<td><?php echo $userAccount->Name; ?></td>
					</tr>
					<tr>
						<th scope="row">email</th>
						<td><?php echo $userAccount->Email; ?></td>
					</tr>
					<tr>
						<th scope="row">Active</th>
						<td><?php echo $userAccount->Active; ?></td>
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
			<img alt="<?php echo $imgAlt; ?>" height="50px" src="<?php echo $imgSrc; ?>" width="50px" />
		</div>
	</div>
</body>

</html>