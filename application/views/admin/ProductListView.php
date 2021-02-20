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
			<?php foreach ($products as $product) { ?>
				<tr>
				<th scope="row"><?php echo $product->Id; ?></th>
					<td><?php echo $product->Name; ?></th>
					<td><?php echo $product->Description; ?></td>
					<td><?php echo $product->Price; ?></td>
					<td><?php echo $product->IsForSale == 1 ? "Yes" : "No"; ?></td>
					<td><a href="view/<?php echo $product->Id; ?>">View details</a></td>
					<td><a href="edit/<?php echo $product->Id; ?>">Edit</a></td>
					<td><a href="delete/<?php echo $product->Id; ?>">Delete</a></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>