	<form id="search-payroll" action="#" method="POST">
				<div class="mdl-textfield mdl-js-textfield">
					
					<label class="mdl-textfield__label" for="clientname">Client Name</label>
					<input class="mdl-textfield__input" type="text" name="clientname" id="clientname"></input>
				</div>
				
				
				<br>
				
				<div class="mdl-textfield mdl-js-textfield ">
					<label class="mdl-textfield__label" for="month">Month</label>
					<select class="mdl-textfield__input" name="month" id="month">
					  <option value="" selected disabled>Month</option>
					  <option value="January">January</option>
					  <option value="February">February</option>
					  <option value="March">March</option>
					  <option value="April">April</option>
					  <option value="May">May</option>
					  <option value="June">June</option>
					  <option value="July">July</option>
					  <option value="August">August</option>
					  <option value="September">September</option>
					  <option value="October">October</option>
					  <option value="November">November</option>
					  <option value="December">December</option>
					</select>
					
				</div>
				<div class="mdl-textfield mdl-js-textfield">
					
					<label class="mdl-textfield__label" for="period">Period</label>
					<select class="mdl-textfield__input" name="period" id="period">
					  <option value="1-15">1-15</option>
					  <option value="16-30">16-30</option>
					</select>
					
				</div>

				<div class="mdl-textfield mdl-js-textfield">
					<input class="mdl-textfield__input" type="text" name="year" pattern="-?[0-9]*(\.[0-9]+)?" id="year"></input>
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
				
				<input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored"/>
	</form>