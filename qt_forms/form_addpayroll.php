	<form id="add-payroll" action="#" method="POST">
				<div class="mdl-textfield mdl-js-textfield">
					
					<select class="mdl-textfield__input">
					  <option value="volvo">Volvo</option>
					  <option value="saab">Saab</option>
					  <option value="mercedes">Mercedes</option>
					  <option value="audi">Audi</option>
					</select>
					<label class="mdl-textfield__label" for="username">Client</label>
				</div>

				<div class="mdl-textfield mdl-js-textfield ">
					<input class="mdl-textfield__input" type="month" name="month" id="month"></input>
				
					
				</div>
				<div class="mdl-textfield mdl-js-textfield">
					
					<select class="mdl-textfield__input" name="period" id="period">
					  <option value="volvo">1-15</option>
					  <option value="saab">16-30</option>
					
					</select>
					<label class="mdl-textfield__label" for="period">Period</label>
				</div>

				<?php
					for($i=1; $i<29; $i++){
						$data = array('j' => $i, );
						$this->load->view('qt_forms/form_addpayrollpage', $data);
					}
				?>'



				<input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored"/>
	</form>