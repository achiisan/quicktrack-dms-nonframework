
<?php
    $db = mysqli_connect('localhost', 'root') or die ('Unable to connect. Check your connection parameters.');

    $query = "CREATE DATABASE IF NOT EXISTS qtdms";

    mysqli_query($db, $query);


    mysqli_select_db($db, 'qtdms');
	
	$clientname = $_POST['clientname'];
	$month = $_POST['month'];
	$period = $_POST['period'];
	$year = $_POST['year'];
	$personnellname = $_POST['personnellname'];
	$personnelfname = $_POST['personnelfname'];
	$personnelmname = $_POST['personnelmname'];

	$dateofbirth = $_POST['dateofbirth'];

	if($clientname == null){
			$clientname = " ";
	}else if($clientname != null){
				$clientname = $clientname.'%';
	} if($year == null){
			$year == " ";	
	}else if($year != null){
				$year = $year.'%';
	} if($personnellname == null){
			$personnellname = " ";
	}else if($personnellname != null){
				$personnellname = $personnellname.'%';
	} if($personnelfname == null){
			$personnelfname = " ";
	}else if($personnelfname != null){
				$personnelfname = $personnelfname.'%';
	} if($personnelmname == null){
			$personnelmname = " ";
	}else if($personnelmname != null){
				$personnelmname = $personnelmname.'%';
	} if($dateofbirth == null){
				$dateofbirth = " ";
	}if($month == null){
				$month == " ";
	}

	if($personnellname === " " && $personnelfname === " " && $personnelmname === " " && $dateofbirth == " "){
			$sql = "SELECT * FROM tbl_payroll p WHERE (PAYROLL_CLIENT LIKE '".$clientname."' AND PAYROLL_PERIOD LIKE '".$month."-".$period."-".$year."')";
			$result=mysqli_query($db,$sql) or die(mysqli_error($db));
			 $counter = 0;       
			?>
			

				<?php
				while($values1 = mysqli_fetch_array($result)){
					$payroll_id = $values1['PAYROLL_ID'];
				?>
					<div class="mdl-card mdl-shadow--3dp card-search">
					  <div class="mdl-card__title" style="background: red; color: white;">
					    <h2 class="mdl-card__title-text"><?php echo $values1['PAYROLL_CLIENT']; ?></h2>
					  </div>
					  <div class="mdl-card__supporting-text">
					    <strong>Payroll Period: 
					    	<?php
					    		$token = strtok($values1['PAYROLL_PERIOD'],"-");
								while ($token !== false)
								{
								echo $token.' ';
								$token = strtok("-");
								} 
							?>
						</strong>

					  </div>
					  <div class="mdl-card__actions mdl-card--border mdl-grid">
					  		<div class="mdl-cell mdl-cell--5-col">
						   		<table class="mdl-data-table mdl-js-data-table  mdl-shadow--2dp tbl-long">
									<thead>
								    <tr>
								   		<th class="mdl-data-table__cell--non-numeric">Page #</th>
									    <th class="mdl-data-table__cell--non-numeric">View Image</th>
									    
								    </tr>
								  </thead>
								  <?php

								  	$sql = "SELECT * FROM tbl_payrollpages WHERE PAYROLLPAGES_PAYROLLID = ".$payroll_id." ORDER BY PAYROLLPAGES_PAGENO ASC";
								  	
								  	$result=mysqli_query($db,$sql) or die(mysqli_error($db));
				 					while($values1 = mysqli_fetch_array($result)){
								  		$pageno = $values1['PAYROLLPAGES_PAGENO'];
								  		$pagelink = $values1['PAYROLLPAGES_DOCPATH'];
								  	?>
								  	<tr>
									  	<th>
									  		<?php echo $pageno;?>
									  	</th>
									  	<th>
									  		<a href="../resources/<?php echo $pagelink;?>">
									  			<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">View Image</button>
									  		</a>
									  	</th>
								  	</tr>
								  <?php
									}
									?>
								</table>
							</div>
							<div class="mdl-cell mdl-cell--7-col">
								<table class="mdl-data-table mdl-js-data-table  mdl-shadow--2dp tbl-long">
									<thead>
								    <tr>
								   		<th class="mdl-data-table__cell--non-numeric">Name</th>
									    <th class="mdl-data-table__cell--non-numeric">Appears in Page #</th>
									    
								    </tr>
								  </thead>
								  <?php

								  	$sql = "SELECT * FROM tbl_personpages e, tbl_payrollpages d WHERE PERSONPAGES_PAYROLLID = ".$payroll_id." AND PAYROLLPAGES_ID = PERSONPAGES_PAYROLLPAGEID ORDER BY PAYROLLPAGES_PAGENO ASC";
								  	
								  	$result=mysqli_query($db,$sql) or die(mysqli_error($db));
				 					while($values1 = mysqli_fetch_array($result)){
								  		$lname = $values1['PERSONPAGES_LASTNAME'];
								  		$fname = $values1['PERSONPAGES_FIRSTNAME'];
								  		$mname = $values1['PERSONPAGES_MIDDLENAME'];
								  		$pageno = $values1['PAYROLLPAGES_PAGENO'];
								  	?>
								  	<tr>
									  	<th>
									  		<?php echo $lname.', '.$fname.' '.$mname;?>
									  	</th>
									  	<th>
									  		<?php echo $pageno;?>
									  	</th>
								  	</tr>
								  <?php
									}
									?>
								</table>
							</div>
			  			</div>
					 
					</div>
				<?php
					
					$counter++;
				
				}	
			if($counter == 0 ){
				echo "No Results Found.";
			}
	}else{
	$sql = "SELECT PAYROLL_ID FROM tbl_payroll WHERE PAYROLL_CLIENT LIKE '".$clientname."' AND PAYROLL_PERIOD LIKE '".$month."-".$period."-".$year."'";
	
	
	$result=mysqli_query($db,$sql) or die(mysqli_error($db));
			
			 $payroll_id = 0;                     
			while($values1 = mysqli_fetch_array($result)){
				$payroll_id = $values1['PAYROLL_ID'];
			}
			if($payroll_id == 0){
					echo 'No results. Company or period does not match.';

			}else{
					$sql2 = "SELECT * FROM tbl_personpages e, tbl_payrollpages d WHERE PERSONPAGES_PAYROLLID = ".$payroll_id." AND ((PERSONPAGES_LASTNAME LIKE '".$personnellname."' OR PERSONPAGES_LASTNAME LIKE '% ".$personnellname."') OR (PERSONPAGES_MIDDLENAME LIKE '".$personnelmname."' OR PERSONPAGES_MIDDLENAME LIKE '% ".$personnelmname."') OR (PERSONPAGES_FIRSTNAME LIKE '".$personnelfname."' OR PERSONPAGES_FIRSTNAME LIKE '% ".$personnelfname."' OR PERSONPAGES_FIRSTNAME LIKE '%-".$personnelfname."') OR PERSONPAGES_DATEOFBIRTH = '".$dateofbirth."') AND PERSONPAGES_PAYROLLPAGEID = PAYROLLPAGES_ID";
					
			
						$result2=mysqli_query($db,$sql2) or die(mysqli_error($db));
				
						if(empty($result2)){
								echo 'No results. Bye';
						}
						else {
								$counter =0;
						?>
						<strong>These are the names that match the search query:</strong>
						<table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
							<thead>
								<tr>
									<th>Last Name</th>
									<th>First Name</th>
									<th>Middle Name</th>
									<th>Birthday</th>
									<th>View Image</th>
								</tr>
							</thead>

							
						<?php
						 while($values = mysqli_fetch_array($result2)	){
										$counter++;
										echo "<tr>";
											echo "<td>".$values['PERSONPAGES_FIRSTNAME']."</td>";
											echo "<td>".$values['PERSONPAGES_MIDDLENAME']."</td>";
											echo "<td>".$values['PERSONPAGES_LASTNAME']."</td>";
											echo "<td>".$values['PERSONPAGES_DATEOFBIRTH']."</td>";
											
											?>
												<th>
									  		<a href="../resources/<?php echo $values['PAYROLLPAGES_DOCPATH'];?>">
									  			<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">View Image</button>
									  		</a>
									  	</th>
											<?php

										echo "</tr>";
						
							}
							echo "</table>";
								if($counter == 0){
									echo "No results.";
								}
						}
			}	

			}	
	
		

?>