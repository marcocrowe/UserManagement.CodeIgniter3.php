<main>
	<?php $this->load->helper("url"); ?>
	<div>
		<div>
			<table class="table">
				<caption class="caption-top">Products Details</caption>
				<tbody>
					<tr>
						<th scope="row">Name</th>
						<td><?php echo $product->Name; ?></td>
					</tr>
					<tr>
						<th scope="row">Description</th>
						<td><?php echo $product->Description; ?></td>
					</tr>
					<tr>
						<th scope="row">Price</th>
						<td><?php echo $product->Price; ?></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</main>