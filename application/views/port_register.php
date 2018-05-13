<div class="col-8">
	<h3>Reģistrēt ostu</h3>
	<?php
      $arr = $this->session->flashdata();
      if(!empty($arr['success'])){
        $html = '<div class="alert alert-success">';
        $html .= $arr['success'];
        $html .= '</div>';
        echo $html;
      }
      ?>
      <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
	<?php echo form_open('port/register'); ?>
	<div class="form-group">
		<div class="row">
			<div class="col-9">
		<input type="text" name="portName" class="form-control" placeholder="Ostas nosaukums" />
	</div>
	<div class="col-3">
		<button type="submit" class="btn btn-primary">Submit</button>
	</div>
	</div>
	</div>
	<?php echo form_close(); ?>
</div>