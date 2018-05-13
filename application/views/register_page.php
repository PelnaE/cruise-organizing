<div class="row justify-content-center">
	<div class="col-5">
		<h3>Jauna lietotāja reģistrācija</h3>
		<?php
		$arr = $this->session->flashdata();
		if(!empty($arr['flash_message'])){
			$html = '<div class="alert alert-danger">';
			$html .= $arr['flash_message'];
			$html .= '</div>';
			echo $html;
		}
		if (!empty($arr['success_message'])){
			$html = '<div class="alert alert-success">';
			$html .= $arr['success_message'];
			$html .= '</div>';
			echo $html;
		}
		?>
		<?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
		<?php echo form_open('register/proceed'); ?>
		<div class="form-group">
			<input type="text" class="form-control" name="name" id="name" placeholder="Vārds" />
		</div>
		<div class="form-group">
			<input type="text" class="form-control" name="surname" id="surname" placeholder="Uzvārds">
		</div>
		<div class="form-group">
			<input type="text" class="form-control" name="persCode" id="persCode" placeholder="Personas kods">
		</div>
		<div class="form-group">
			<input type="password" class="form-control" name="pass" id="pass" placeholder="Parole">
		</div>
		<div class="form-group">
			<input type="password" class="form-control" name="passAgain" id="passAgain" placeholder="Parole vēlreiz">
		</div>
		<div class="form-check form-group">
			<input class="form-check-input" type="checkbox" value="" id="rules">
			<label class="form-check-label" for="rules">
				Iepazinos un ievēroju <a href="#">Noteikumus</a>.
			</label>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Ienākt</button>
		</div>
		<?php echo form_close(); ?>
	</div>
</div>