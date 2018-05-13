<div class="col-8">
	<h3>Reģistrēt kajīti</h3>
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
	<?php echo form_open('cabin/register'); ?>
	<div class="form-group">
		<input name="class" class="form-control" placeholder="Kajītes klase" />
	</div>
	<div class="form-group">
		<textarea name="descr" class="form-control" placeholder="Kajītes apraksts"></textarea>
	</div>
	<div class="form-group row">
		<div class="col-4">
			<select class="form-control" name="shipID">
				<option selected>Kuģis</option>
				<?php foreach($ships as $ship): ?>
				<option value="<?php echo $ship->shipID; ?>"><?php echo $ship->shipName; ?></option>
				<?php endforeach; ?>
			</select>

		</div>
		<div class="col-3 offset-5">
			<button class="btn btn-primary" type="submit">Reģistrēt kajīti</button>
		</div>
	</div>
	<?php echo form_close(); ?>
</div>