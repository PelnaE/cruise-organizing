<div class="col-8">
	<h3>Reģistrēt pasažieri</h3>
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
	<?php echo form_open('passenger/register'); ?>
	<div class="form-group row">
		<div class="col-6">
			<input type="text" name="name" placeholder="Vārds" class="form-control" />
		</div>
		<div class="col-6">
			<input type="text" name="surname" placeholder="Uzvārds" class="form-control" />
		</div>
	</div>
	<div class="form-group row">
		<div class="col-9">
		<input type="text" name="persCode" placeholder="Personas kods" class="form-control" />
	</div>
	<div class="col-3">
		<button class="btn btn-primary" type="submit">Reģistrēt pasažieri</button>
	</div>
	</div>
	<?php echo form_close(); ?>
</div>