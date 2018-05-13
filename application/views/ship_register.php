<div class="col-9">
  <h3>Reģistrēt kruīza kuģi</h3>
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
<?php echo form_open('ship/register'); ?>
<div class="form-group">
	<input type="text" name="shipName" class="form-control" placeholder="Kuģa nosaukums" />
</div>
<div class="form-group">
	<textarea class="form-control" name="shipDescr" placeholder="Kuģa apraksts"></textarea>
</div>
<div class="form-group">
	<button type="submit" class="btn btn-primary">Reģistrēt kuģi</button>
</div>
<?php echo form_close(); ?>