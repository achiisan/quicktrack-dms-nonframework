


<div class="mdl-cell mdl-cell--1-col">
	<button onclick="return false;" id="prev" class="navi-button-cards mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored mdl-js-ripple-effect">
	  <-
	</button>
</div>

<div class="mdl-cell mdl-cell--10-col card-layout-container">

<?php
for($j=1; $j<31; $j++){
?>
	<div id="e<?php echo $j ?>"class=" mdl-card mdl-shadow--2dp through mdl-shadow--8dp card-pages">		
		<div class="inner-content">
			
				<strong> Page <?php echo $j ?></br></strong>
				<div class="mdl-textfield mdl-js-textfield ">
					<input class="mdl-textfield__input" type="text" name="imglink<?php echo $j ?>" id="imglink<?php echo $j ?>" ></input>
					<label class="mdl-textfield__label" for="period">Path to Scanned Document</label>
				</div>
						
				<strong> </br>Personnel included in this Page:</strong>
					
				<table class="mdl-data-table mdl-js-data-table  mdl-shadow--2dp">
					<thead>
				    <tr>
				   		<th class="mdl-data-table__cell--non-numeric">#</th>
				      <th class="mdl-data-table__cell--non-numeric">Last Name</th>
				      <th class="mdl-data-table__cell--non-numeric">First Name</th>
				      <th class="mdl-data-table__cell--non-numeric">Middle Name</th>
				      <th class="mdl-data-table__cell--non-numeric">Birthday</th>
				    </tr>
				  </thead>
				  	<?php 
						for($i=1; $i<31; $i++){
							
						?>
				  <tr>
				  	<th class="mdl-data-table__cell--non-numeric">
						<?php echo $i;?>
					</th>
					
					<th class="mdl-data-table__cell--non-numeric">
						<div class="mdl-textfield mdl-js-textfield ">
							<input class="mdl-textfield__input" type="text" name="<?php echo $j; ?>lname<?php echo $i; ?>" id="<?php echo $j ?>lname<?php echo $i ?>" ></input>

							<label class="mdl-textfield__label" for="lname">Last Name</label>
						</div>

					</th>
					<th class="mdl-data-table__cell--non-numeric">


						<div class="mdl-textfield mdl-js-textfield ">
							<input class="mdl-textfield__input" type="text" name="<?php echo $j; ?>fname<?php echo $i; ?>" id="<?php echo $j ?>fname<?php echo $i ?>" ></input>

							<label class="mdl-textfield__label" for="fname">First Name</label>
						</div>

					</th>

					<th class="mdl-data-table__cell--non-numeric">

						<div class="mdl-textfield mdl-js-textfield ">
							<input class="mdl-textfield__input" type="text" name="<?php echo $j; ?>mname<?php echo $i; ?>" id="<?php echo $j ?>mname<?php echo $i ?>" ></input>

							<label class="mdl-textfield__label" for="mname">Middle Name</label>
						</div>

					</th>

					<th class="mdl-data-table__cell--non-numeric">
					
						<div class="mdl-textfield mdl-js-textfield ">
							<input class="mdl-textfield__input" type="date" name="<?php echo $j; ?>bday<?php echo $i; ?>" id="<?php echo $j ?>mname<?php echo $i ?>" ></input>

							<label class="mdl-textfield__label" for="mname"></label>
						</div>
					</th>

					</tr>	
					<?php 
					}
					?>
					
				</table>
				
		</div>
					
	</div>
<?php
}
?>

</div>		

<div class="mdl-cell mdl-cell--1-col">
	<button onclick="return false;" id="next" class="navi-button-cards mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored mdl-js-ripple-effect">
	  ->
	</button>
</div>

