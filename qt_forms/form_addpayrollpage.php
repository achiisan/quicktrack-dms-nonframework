


<div class="mdl-cell mdl-cell--1-col">
	<button onclick="return false;" id="prev" class="navi-button-cards mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored mdl-js-ripple-effect">
	  <span class="fi-arrow-left"></spam>
	</button>
</div>

<div class="mdl-cell mdl-cell--10-col card-layout-container">

<?php
for($j=1; $j<31; $j++){
?>
	 <div id="e<?php echo $j ?>"class=" mdl-card mdl-shadow--2dp through mdl-shadow--8dp card-pages">		
		<div class="inner-content">
				<div class="title-table">
					
					<strong> Page <?php echo $j ?></br></strong>
				</div>
				<div class="mdl-textfield mdl-js-textfield ">
					<input class="mdl-textfield__input" type="text" name="imglink<?php echo $j ?>" id="imglink<?php echo $j ?>" ></input>
					<label class="mdl-textfield__label" for="period">Path to Scanned Document</label>
				</div>
				<div class="title-table">		
					<strong> </br>Please input ALL Personnel that is listed on this page:</strong>
				</div>
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

						
						</div>

					</th>
					<th class="mdl-data-table__cell--non-numeric">


						<div class="mdl-textfield mdl-js-textfield ">
							<input class="mdl-textfield__input" type="text" name="<?php echo $j; ?>fname<?php echo $i; ?>" id="<?php echo $j ?>fname<?php echo $i ?>" ></input>

							
						</div>

					</th>

					<th class="mdl-data-table__cell--non-numeric">

						<div class="mdl-textfield mdl-js-textfield ">
							<input class="mdl-textfield__input" type="text" name="<?php echo $j; ?>mname<?php echo $i; ?>" id="<?php echo $j ?>mname<?php echo $i ?>" ></input>

							
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
	  <span class="fi-arrow-right"></spam>
	</button>
</div>

