  <div class="row justify-content-center">
    <div class="col-4">
      <h3>Ienākt sistēmā</h3>
      <?php
      $arr = $this->session->flashdata();
      if(!empty($arr['flash_message'])){
        $html = '<div class="alert alert-danger">';
        $html .= $arr['flash_message'];
        $html .= '</div>';
        echo $html;
      }
      ?>
		<?php echo form_open('main/login');?>
			<div class="form-group">
					<input type="text" class="form-control" name="persCode" id="persCode" placeholder="Personas kods">

			</div>
			<div class="form-group">
      <input type="password" class="form-control" name="pass" id="inputPassword" placeholder="Parole">

  </div>
  <div class="form-group">
    <input type="submit" class="btn btn-primary" value="ienākt" />

  </div>
</form>
      </div>
    </div>