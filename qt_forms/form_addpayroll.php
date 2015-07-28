

<div class="mdl-cell mdl-cell--4-col col-left">
		
	<h4>New Payroll Record</h4>
		<div class="mdl-card mdl-shadow--2dp through mdl-shadow--8dp ">		
			<div class="mdl-card__supporting-text">
				<form id="add-payroll" action="../models/addpayroll.php" method="POST">

					<h5>1. Who is your Client? </h5>
					<!-- rgb(150, 209, 255) -->

					<div class="mdl-textfield mdl-js-textfield">
						
						<select class="mdl-textfield__input" name="client">
						  <option value="volvo">Volvo</option>
						  <option value="saab">Saab</option>
						  <option value="mercedes">Mercedes</option>
						  <option value="audi">Audi</option>
						</select>
						<label class="mdl-textfield__label" for="username">Client</label>
					</div>

						<strong><h5>2. What is the period covered by this payroll?</h5></strong>
					
						<div class="mdl-textfield mdl-js-textfield ">
					<label class="mdl-textfield__label" for="month">Month</label>
					<select class="mdl-textfield__input" name="month" id="month">
					  <option value="JAN">January</option>
					  <option value="FEB">February</option>
					  <option value="MAR">March</option>
					  <option value="APR">April</option>
					  <option value="MAY">May</option>
					  <option value="JUN">June</option>
					  <option value="JUL">July</option>
					  <option value="AUG">August</option>
					  <option value="SEP">September</option>
					  <option value="OCT">October</option>
					  <option value="NOV">November</option>
					  <option value="DEC">December</option>
					</select>
					
				</div>
				<div class="mdl-textfield mdl-js-textfield">
					
					<label class="mdl-textfield__label" for="period">Period</label>
					<select class="mdl-textfield__input" name="period" id="period">
					  <option value="115">1-15</option>
					  <option value="1630">16-30</option>
					</select>
					
				</div>

				<div class="mdl-textfield mdl-js-textfield">
					<input class="mdl-textfield__input" type="text" name="year" pattern="-?[0-9]*(\.[0-9]+)?" id="year"></input>
					<label class="mdl-textfield__label" for="year">Year</label>
					 <span class="mdl-textfield__error">Input is not a year!</span>
				</div>
			</div>
			<input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored"/>
		</div>				
			
</div>
<div class="mdl-cell mdl-cell--8-col card-stack-pages mdl-grid">
	<h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. Upload Payroll Scans</h5>

	<div id="payrollpage" class="mdl-cell mdl-cell--12-col mdl-grid">
		

	<button onclick="return false;"  class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect card-close">
	  X Close this window 
	</button>

		<?php include 'form_addpayrollpage.php'; ?>
	</div>
	</form> 
</div>	



