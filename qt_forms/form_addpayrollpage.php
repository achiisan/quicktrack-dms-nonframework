			
				<h1> Page <?php echo $j ?></h1>
				<div class="mdl-textfield mdl-js-textfield ">
					<input class="mdl-textfield__input" type="text" name="imglink<?php echo $j ?>" id="imglink<?php echo $j ?>"></input>

					<label class="mdl-textfield__label" for="period">Path to Scanned Document</label>
				</div>
				

				<?php 
				for($i=1; $i<26; $i++){

				?>
				</br>
					</br>
				<div class="mdl-textfield mdl-js-textfield ">
					<input class="mdl-textfield__input" type="text" name="<?php echo $j ?>lname<?php echo $i ?>" id="lname1"></input>

					<label class="mdl-textfield__label" for="lname">Last Name</label>
				</div>

				<div class="mdl-textfield mdl-js-textfield ">
					<input class="mdl-textfield__input" type="text" name="<?php echo $j ?>fname<?php echo $i ?>" id="fname1"></input>

					<label class="mdl-textfield__label" for="fname">First Name</label>
				</div>

				<div class="mdl-textfield mdl-js-textfield ">
					<input class="mdl-textfield__input" type="text" name="<?php echo $j ?>mname<?php echo $i ?>" id="mname1"></input>

					<label class="mdl-textfield__label" for="mname">Middle Name</label>
				</div>

					</br>
						</br>
				<?php 
					}
				?>