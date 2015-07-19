			<?php
				for($j=1; $j<31; $j++){
			?>
			<div class="mdl-card mdl-shadow--2dp through mdl-shadow--8dp card-pages">		
				<div >
				
					<div class="inner-content">
					<strong> Page <?php echo $j ?></strong>
					<div class="mdl-textfield mdl-js-textfield ">
						<input class="mdl-textfield__input" type="text" name="imglink<?php echo $j ?>" id="imglink<?php echo $j ?>"></input>

						<label class="mdl-textfield__label" for="period">Path to Scanned Document</label>
					</div>
					
					<strong> Personnel included in this Page:</strong>
					<?php 
					for($i=1; $i<26; $i++){

					?>
					
						
						<div class="mdl-textfield mdl-js-textfield ">
							<input class="mdl-textfield__input" type="text" name="<?php echo $j ?>lname<?php echo $i ?>" id="<?php echo $j ?>lname<?php echo $i ?>"></input>

							<label class="mdl-textfield__label" for="lname">Last Name</label>
						</div>

						<div class="mdl-textfield mdl-js-textfield ">
							<input class="mdl-textfield__input" type="text" name="<?php echo $j ?>fname<?php echo $i ?>" id="<?php echo $j ?>fname<?php echo $i ?>"></input>

							<label class="mdl-textfield__label" for="fname">First Name</label>
						</div>

						<div class="mdl-textfield mdl-js-textfield ">
							<input class="mdl-textfield__input" type="text" name="<?php echo $j ?>mname<?php echo $i ?>" id="<?php echo $j ?>mname<?php echo $i ?>"></input>

							<label class="mdl-textfield__label" for="mname">Middle Name</label>
						</div>
					
						</br>
							</br>
					<?php 
						}

						?>
					</div>
					</div>
				</div>
				<?php
				}
				?>

				