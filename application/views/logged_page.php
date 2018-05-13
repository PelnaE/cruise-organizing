<div class="col-9">
	<?php if(!empty($routes)): ?>
	<table class="table">
		<thead class="thead-light">
			<tr>
				<th scope="col">Nr.p.k.</th>
				<th scope="col">Atiešanas osta</th>
				<th scope="col">Pienākšanas osta</th>
				<th scope="col">Atiešanas laiks</th>
				<th scope="col">Pienākšanas laiks</th>
				<th scope="col">Kuģis</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($routes as $route): ?>
			<tr>
				<td><?php echo $route->routeID; ?></td>
				<td><?php echo $route->routeStart; ?></td>
				<td><?php echo $route->routeEnd; ?></td>
				<td><?php echo date("d.m.Y H:i", $route->startTime); ?></td>
				<td><?php echo date("d.m.Y H:i", $route->endTime); ?></td>
				<td><?php echo $route->shipName; ?></td>
		</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
<?php endif;?>
</div>