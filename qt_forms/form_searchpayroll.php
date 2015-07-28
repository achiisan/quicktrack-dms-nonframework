

		
		<h4>Search Payroll Records</h4>
		<div class="mdl-card mdl-shadow--2dp through mdl-shadow--8dp card-search">		
			
			<div class="mdl-card__supporting-text">
			<form id="search-payroll" method="POST">
				<div class="mdl-textfield mdl-js-textfield">
					
					<label class="mdl-textfield__label" for="clientname">Client Name</label>
					<input class="mdl-textfield__input" type="text" name="clientname" id="clientname" required ></input>
				</div>
				
				
				<br>
				
					<div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--4-col">
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
					<div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--4-col">
						
						<label class="mdl-textfield__label" for="period">Period</label>
						<select class="mdl-textfield__input" name="period" id="period">
						  <option value="115">1-15</option>
						  <option value="1630">16-30</option>
						</select>
						
					</div>

					<div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--3-col">
						<input class="mdl-textfield__input" type="text" name="year" pattern="-?[0-9]*(\.[0-9]+)?" id="year" required ></input>
						<label class="mdl-textfield__label" for="year">Year</label>
						 <span class="mdl-textfield__error">Input is not a year!</span>
					</div>

				
				
				<div class="mdl-textfield mdl-js-textfield ">
					<input class="mdl-textfield__input" type="text" name="personnellname" id="personnellname"></input>

					<label class="mdl-textfield__label" for="personnellname">Personnel Last Name</label>
				</div>

				<br>
				
				<div class="mdl-textfield mdl-js-textfield ">
					<input class="mdl-textfield__input" type="text" name="personnelfname" id="personnelfname"></input>

					<label class="mdl-textfield__label" for="personnelfname">Personnel First Name</label>
				</div>

				<br>
				
				<div class="mdl-textfield mdl-js-textfield ">
					<input class="mdl-textfield__input" type="text" name="personnelmname" id="personnelmname"></input>

					<label class="mdl-textfield__label" for="personnelmname">Personnel Middle Name</label>
				</div>

				<br>


					<div class="mdl-textfield mdl-js-textfield ">
					<input class="mdl-textfield__input" type="date" name="dateofbirth" id="dateofbirth"></input>
					<!--<label class="mdl-textfield__label" for="dateofbirth">Date of Birth</label>-->
				</div>
				
			
		</div>
			<input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored"/>
			</form>
	</div>

