<div class="mdl-cell mdl-cell--12-col">
		
	</div>
	<div class="mdl-cell mdl-cell--6-col">
		<div class="card-payrollinfo">
			<h3>New Payroll Record</h3>
			<div class="mdl-card mdl-shadow--2dp through mdl-shadow--8dp ">		
			<div class="mdl-card__supporting-text">
				<form id="add-payroll" action="../models/addpayroll.php" method="POST">

					<strong><h5>1. Who is your Client? </h5></strong>
					<div class="mdl-textfield mdl-js-textfield">
						
						<select class="mdl-textfield__input" name="client">
						  <option value="volvo">Volvo</option>
						  <option value="saab">Saab</option>
						  <option value="mercedes">Mercedes</option>
						  <option value="audi">Audi</option>
						</select>
						<label class="mdl-textfield__label" for="username">Client</label>
					</div>

						<strong><h5>1. What is the period covered by this payroll?</h5></strong>
					<div class="mdl-textfield mdl-js-textfield ">
						<input class="mdl-textfield__input" type="month" name="month" id="month"></input>
					
						
					</div>
					<div class="mdl-textfield mdl-js-textfield">
						
						<select class="mdl-textfield__input" name="period" id="period">
						  <option value="1-15">1-15</option>
						  <option value="16-30">16-30</option>
						
						</select>
						<label class="mdl-textfield__label" for="period">Period</label>
					</div>
					</div>
					<input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored"/>
				</div>
			</div>


				
			
	</div>
	<div class="mdl-cell mdl-cell--6-col card-stack-pages">
		<h4>3. Upload Payroll Scans</h4>
		<?php include 'form_addpayrollpage.php'; ?>


		</form> 
	</div>	


