<div class="row">
	<div class="col-3">
		<div class="card mb-3">
			<ul class="list-group list-group-flush">
				<li class="list-group-item"><?php echo $_SESSION['name']; ?> <?php echo $_SESSION['surname']; ?></li>
				<li class="list-group-item"><?php echo anchor('', 'Sākums'); ?></li>
				<li class="list-group-item"><?php echo anchor('main/logout', 'Iziet'); ?></li>
			</ul>
		</div>
		<div class="card mb-3">
			<div class="card-header">
				Satura administrācija
			</div>
			<ul class="list-group list-group-flush">
				<li class="list-group-item"><?php echo anchor('port', 'Reģistrēt ostu') ?></li>
				<li class="list-group-item"><?php echo anchor('ship', 'Reģistrēt kuģi'); ?></li>
				<li class="list-group-item"><?php echo anchor('cabin', 'Reģistrēt kajīti'); ?></li>
				<li class="list-group-item"><?php echo anchor('route', 'Reģistrēt maršrutu'); ?></li>
				<li class="list-group-item"><?php echo anchor('entertainment', 'Reģistrēt izklaidi'); ?></li>
			</ul>
		</div>
		<div class="card mb-3">
			<div class="card-header">
				Ceļojumu administrācija
			</div>
			<ul class="list-group list-group-flush">
				<li class="list-group-item"><?php echo anchor('passenger', 'Reģistrēt pasažieri') ?></li>
				<li class="list-group-item"><?php echo anchor('voyage', 'Reģistrēt ceļojumu'); ?></li>
				<li class="list-group-item"><?php echo anchor('passenger/list', 'Pasažieru saraksts'); ?></li>
				<li class="list-group-item"><?php echo anchor('voyage/list', 'Ceļojumu saraksts'); ?></li>
			</ul>
		</div>
	</div>