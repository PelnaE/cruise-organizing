<div class="col-8">
	<?php if(!empty($passengers)): ?>
	<h3>Pasažieru saraksts</h3>
	<table class="table">
		<thead class="thead-light">
			<tr>
				<th scope="col">Nr.p.k.</th>
				<th scope="col">Vārds</th>
				<th scope="col">Uzvārds</th>
				<th scope="col">Personas kods</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($passengers as $passenger): ?>
			<tr>
				<td><?php echo $passenger->passengerID; ?></td>
				<td><?php echo $passenger->name; ?></td>
				<td><?php echo $passenger->surname; ?></td>
				<td><?php echo $passenger->persCode; ?></td>
			</tr>
<?php endforeach; ?>
		</tbody>
	</table>
<?php endif; ?>
</div>