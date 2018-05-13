<div class="col-9">
	<h3>Ceļojumu saraksts</h3>
	<?php if(!empty($voyage)): ?>
	<table class="table">
		<thead class="thead-light">
			<tr>
				<th scope="col">Nr.p.k.</th>
				<th scope="col">Maršruts</th>
				<th scope="col">Laiks</th>
				<th scope="col">Pasažiera vārds, uzvārds</th>
				<th scope="col">Kajīte</th>
				<th scope="col">Kuģis</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($voyage as $item): ?>
			<tr>
				<td><?php echo $item->voyageID; ?></td>
				<td><?php echo $item->routeStart; ?> - <?php echo $item->routeEnd; ?></td>
				<td><?php echo date("d.m.Y h:i", $item->startTime); ?> - <?php echo date("d.m.Y h:i", $item->endTime); ?></td>
				<td><?php echo $item->name; ?> <?php echo $item->surname; ?></td>
				<td><?php echo $item->class; ?></td>
				<td><?php echo $item->shipName; ?></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
<?php endif; ?>
</div>