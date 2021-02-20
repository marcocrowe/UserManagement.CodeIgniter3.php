<main>
	<table class="table table-striped">
		<caption class="caption-top">List of Products</caption>
		<thead>
			<tr>
				<th scope="col">Name</th>
				<th scope="col">Description</th>
				<th scope="col">Price</th>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($products as $product) { ?>
				<tr>
					<th scope="row"><?php echo $product->Name; ?></th>
					<td><?php echo $product->Description; ?></td>
					<td><?php echo $product->Price; ?></td>
					<td><a href="addtocart/<?php echo $product->Id; ?>">Add to cart</a></td>
					<td><a href="addtowishlist/<?php echo $product->Id; ?>">Add to wishlist</a></td>
					<td><a href="view/<?php echo $product->Id; ?>">View details</a></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>