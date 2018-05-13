<div class="col-9">
	<h3>Reģistrēt maršrutu</h3>
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
	<?php echo form_open('route/register'); ?>
	<div class="form-group">
		<select name="routeStart" id="inputState" class="form-control">
				<option selected>Atiešanas osta</option>
				<?php foreach($ports as $port): ?>
				<option value="<?php echo $port->portName; ?>"><?php echo $port->portName; ?></option>
			<?php endforeach; ?>
			</select>
	</div>
	<div class="form-group row">
		<label for="startTime" class="col-sm-4 col-form-label">Atiešanas laiks</label>
		<div class="col-2">
			<select name="startYear" id="inputState" class="form-control">
				<option value="2018">2018</option>
			</select>
		</div>
		<div class="col-2">
			<select name="startMonth" id="inputState" class="form-control">
				<option selected>Mēnesis</option>
				<option value="01">Janvāris</option>
				<option value="02">Februāris</option>
				<option value="03">Marts</option>
				<option value="04">Aprīlis</option>
				<option value="05">Maijs</option>
				<option value="06">Jūnijs</option>
				<option value="07">Jūlijs</option>
				<option value="08">Augusts</option>
				<option value="09">Septembris</option>
				<option value="10">Oktobris</option>
				<option value="11">Novembris</option>
				<option value="12">Decembris</option>
			</select>
		</div>
		<div class="col-2">
			<select name="startDay" id="inputState" class="form-control">
				<option selected>Diena</option>
				<option value="01">1</option>
				<option value="02">2</option>
				<option value="03">3</option>
				<option value="04">4</option>
				<option value="05">5</option>
				<option value="06">6</option>
				<option value="07">7</option>
				<option value="08">8</option>
				<option value="09">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
				<option value="23">23</option>
				<option value="24">24</option>
				<option value="25">25</option>
				<option value="26">26</option>
				<option value="27">27</option>
				<option value="28">28</option>
				<option value="39">29</option>
				<option value="30">30</option>
				<option value="31">31</option>
				<option value="32">32</option>
			</select>
		</div>
		<div class="col-2">
			<select name="startTime" id="inputState" class="form-control">
				<option selected>Laiks</option>
				<option value="10:00">10:00</option>
				<option value="10:30">10:30</option>
			</select>
		</div>
	</div>
		<div class="form-group">
		<select name="routeEnd" id="inputState" class="form-control">
				<option selected>Galapunkts</option>
				<?php foreach($ports as $port): ?>
				<option value="<?php echo $port->portName; ?>"><?php echo $port->portName; ?></option>
			<?php endforeach; ?>
			</select>
	</div>
	<div class="form-group row">
		<label for="endTime" class="col-sm-4 col-form-label">Pienākšanas laiks</label>
		<div class="col-2">
			<select name="endYear" id="inputState" class="form-control">
				<option selected value="2018">2018</option>
			</select>
		</div>
		<div class="col-2">
			<select name="endMonth" id="inputState" class="form-control">
				<option selected>Mēnesis</option>
				<option value="01">Janvāris</option>
				<option value="02">Februāris</option>
				<option value="03">Marts</option>
				<option value="04">Aprīlis</option>
				<option value="05">Maijs</option>
				<option value="06">Jūnijs</option>
				<option value="07">Jūlijs</option>
				<option value="08">Augusts</option>
				<option value="09">Septembris</option>
				<option value="10">Oktobris</option>
				<option value="11">Novembris</option>
				<option value="12">Decembris</option>
			</select>
		</div>
		<div class="col-2">
			<select name="endDay" id="inputState" class="form-control">
				<option selected>Diena</option>
				<option value="01">1</option>
				<option value="02">2</option>
				<option value="03">3</option>
				<option value="04">4</option>
				<option value="05">5</option>
				<option value="06">6</option>
				<option value="07">7</option>
				<option value="08">8</option>
				<option value="09">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
				<option value="23">23</option>
				<option value="24">24</option>
				<option value="25">25</option>
				<option value="26">26</option>
				<option value="27">27</option>
				<option value="28">28</option>
				<option value="39">29</option>
				<option value="30">30</option>
				<option value="31">31</option>
				<option value="32">32</option>
			</select>
		</div>
		<div class="col-2">
			<select name="endTime" id="inputState" class="form-control">
				<option selected>Laiks</option>
				<option value="10:00">10:00</option>
				<option value="11:00">11:00</option>
				<option value="14:00">14:00</option>
			</select>
		</div>

	</div>
	<div class="form-group row">
		<div class="col-6">
			<select name="shipID" id="inputState" class="form-control">
				<option selected>Kuģis</option>
				<?php foreach($ships as $ship): ?>
				<option value="<?php echo $ship->shipID; ?>"><?php echo $ship->shipName; ?></option>
			<?php endforeach; ?>
			</select>
		</div>
		<div class="col-2 offset-3">
			<button type="submit" class="btn btn-primary">Reģistrēt maršrutu</button>
			</div>
		</div>
	
	<?php echo form_close(); ?>
</div>