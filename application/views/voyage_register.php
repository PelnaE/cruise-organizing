<div class="col-8">
	<h3>Reģistrēt ceļojumu</h3>
	<?php
      $arr = $this->session->flashdata();
      if(!empty($arr['success'])){
        $html = '<div class="alert alert-success">';
        $html .= $arr['success'];
        $html .= '</div>';
        echo $html;
      }
      ?>
	<?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
	<?php echo form_open('voyage/register'); ?>
	<div class="form-group">
	<select name="routeID" class="form-control">
		<option value="" selected>Maršruts</option>
		<?php foreach($routes as $route): ?>
			<option value="<?php echo $route->routeID; ?>">
				<?php echo $route->routeStart; ?> - <?php echo $route->routeEnd; ?>
				 | 
				 <?php echo date("d.m.Y h:i", $route->startTime); ?> - 
				 <?php echo date("d.m.Y h:i", $route->endTime); ?> 
				 <?php echo $route->shipName; ?>
			</option>
		<?php endforeach; ?>
	</select>
</div>
<div class="form-group">
	<select name="passengerID" class="form-control">
		<option value="" selected>Pasažieris</option>
		<?php foreach($passengers as $passenger): ?>
			<option value="<?php echo $passenger->passengerID; ?>">
				<?php echo $passenger->name; ?> <?php echo $passenger->surname; ?> <?php echo $passenger->persCode; ?>
			</option>
		<?php endforeach; ?>
	</select>
</div>
<div class="form-group">
	<select name="cabinID" class="form-control">
		<option value="" selected>Kajīte</option>
		<?php foreach($cabins as $cabin): ?>
			<option value="<?php echo $cabin->ID; ?>">
				<?php echo $cabin->shipName; ?> - <?php echo $cabin->class; ?> klase
			</option>
		<?php endforeach; ?>
	</select>
</div>
<div class="form-group">
	<button type="submit" class="btn btn-primary">Reģistrēt ceļojumu</button>
	</div>
	<?php echo form_close(); ?>
</div>