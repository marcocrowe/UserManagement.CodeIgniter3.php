<main>
	<table class="table table-striped">
		<caption class="caption-top">List of Products</caption>
		<thead>
			<tr>
			<th scope="col">Id</th>
			<th scope="col">Name</th>
				<th scope="col">Description</th>
				<th scope="col">Price</th>
				<th scope="col">Is for Sale</th>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($products as $product) : ?>
				<tr>
				<th scope="row"><?= $product->Id; ?></th>
					<td><?= $product->Name; ?></th>
					<td><?= $product->Description; ?></td>
					<td><?= $product->Price; ?></td>
					<td><?= $product->IsForSale == 1 ? "Yes" : "No"; ?></td>
					<td><a href="view/<?= $product->Id; ?>">View details</a></td>
					<td><a href="edit/<?= $product->Id; ?>">Edit</a></td>
					<td><a href="delete/<?= $product->Id; ?>">Delete</a></td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
