<form id="add-payroll" action="../models/addpayroll.php" method="POST">
	<div class="mdl-cell mdl-cell--12-col mdl-grid">
		<div class="mdl-cell mdl-cell--6-col">
			<div class="mdl-card mdl-shadow--2dp through mdl-shadow--8dp card-full card-nopadding mdl-grid">		
				<div class="card-bullet">
					
						<p>1.</p>
					
				</div>
				<div class="card-content">
					<div class="card-header">
						Who is your client?
					</div>

					<div class="mdl-textfield mdl-js-textfield">
							
							<select class="mdl-textfield__input" name="client">
							  <option value="volvo">Volvo</option>
							  <option value="saab">Saab</option>
							  <option value="mercedes">Mercedes</option>
							  <option value="audi">Audi</option>
							</select>
							<label class="mdl-textfield__label" for="username">Client</label>
					</div>
				</div>
			</div>
		</div>

		<div class="mdl-cell mdl-cell--6-col">
			<div class="mdl-card mdl-shadow--2dp through mdl-shadow--8dp card-full card-nopadding mdl-grid">		
				<div class="card-bullet">
					
						<p>2.</p>
					
				</div>
				<div class="card-content">
					<div class="card-header mdl-cell mdl-cell--12-col">
						What is the period covered by this payroll?
					</div>
					<div class="mdl-grid">
						<div class="mdl-cell mdl-cell--4-col">
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
						</div>
						<div class="mdl-cell mdl-cell--4-col">
									<div class="mdl-textfield mdl-js-textfield">
						
										<label class="mdl-textfield__label" for="period">Period</label>
										<select class="mdl-textfield__input" name="period" id="period">
										  <option value="115">1-15</option>
										  <option value="1630">16-30</option>
										</select>
										
									</div>
						</div>
						<div class="mdl-cell mdl-cell--4-col">
								<div class="mdl-textfield mdl-js-textfield">
									<input class="mdl-textfield__input" type="text" name="year" pattern="-?[0-9]*(\.[0-9]+)?" id="year"></input>
									<label class="mdl-textfield__label" for="year">Year</label>
									 <span class="mdl-textfield__error">Input is not a year!</span>
								</div>
						</div>
					</div>

				</div>
				
			</div>
		</div>

		<div class="mdl-cell mdl-cell--12-col">
			<div class="mdl-card mdl-shadow--2dp through mdl-shadow--8dp card-full card-nopadding mdl-grid">		
				<div class="card-bullet">
					
						<p>3.</p>
					
				</div>
				<div class="card-content">
					<div class="card-header">
						Upload payroll scans
					</div>
					<div class="mdl-grid">
						<div id="payrollpage" class="mdl-cell mdl-cell--12-col mdl-grid">
							<button onclick="return false;"  class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect card-close">
							  X Close this window 
							</button>

							<?php include 'form_addpayrollpage.php'; ?>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	
	</div>
	</form>

	