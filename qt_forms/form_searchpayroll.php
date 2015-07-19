	<form id="search-payroll" action="../models/searchpayroll.php" method="POST">
				<div class="mdl-textfield mdl-js-textfield">
					
					<label class="mdl-textfield__label" for="clientname">Client Name</label>
					<input class="mdl-textfield__input" type="text" name="clientname" id="clientname"></input>
				</div>
				
				
				<br>
				
				<div class="mdl-textfield mdl-js-textfield ">
					<label class="mdl-textfield__label" for="month">Month</label>
					<select class="mdl-textfield__input" name="month" id="month">
					  <option value="" selected disabled>Month</option>
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