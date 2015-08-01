<script>
			// this is the id of the form
		$("#payroll_table tr.clickable").click(function() {

			
			$client = "<?php echo $_POST['clientname']; ?>"
			$period = $('.period', this).text();
			$period = $period.split('-');
			$month = $period[0];
			$day = $period[1];
			$year = $period[2];

			 var url = "../models/searchpayroll.php"; // the script where you handle the form input.
		    $('#payroll-details').empty(); 
		     $('#payroll-details').append('  <div class="mdl-spinner mdl-js-spinner is-active"></div>');

		  
		    $.ajax({
		           type: "POST",
		           url: url,
		           data:{clientname: $client, month: $month , period: $day, year: $year},// serializes the form's elements.
		           success: function(data)
		           {
		           	  $('#payroll-details').empty(data); 
		             $('#payroll-details').append(data); // show response from the php script.
		           }
		         });
		      event.preventDefault(); // cancel default behavior
		   return false;// avoid to execute the actual submit of the form.
		

		});
	</script>

<?php
	//Soon

 $db = mysqli_connect('localhost', 'root','', 'qtdms') or die ('Unable to connect. Check your connection parameters.');
?>

	<div class="mdl-cell mdl-cell--3-col">
			<table id="payroll_table" class="mdl-data-table mdl-js-data-table  mdl-shadow--2dp">
		  <thead>
		    <tr>
		      <th class="mdl-data-table__cell--non-numeric">Payroll Period</th>
		    
		    </tr>
		  </thead>
		  <tbody>
		  	<?php
		  		$sql = "SELECT * FROM tbl_payroll WHERE PAYROLL_CLIENT = '".$_POST['clientname']."' ORDER BY PAYROLL_ID ";
			$result=mysqli_query($db,$sql) or die(mysqli_error($db));
			 $counter = 0;       
				
				while($values1 = mysqli_fetch_array($result)){

					$period = $values1['PAYROLL_PERIOD'];
					$id = $values1['PAYROLL_ID'];
				?>
			
		    <tr class="clickable">
		    	
		      <td class="mdl-data-table__cell--non-numeric period"><?php echo $period ?></td>
		      
		    </tr>
		
		  	<?php
		  		}
		  	?>
		  </tbody>
		</table>
	</div>
	<div id="payroll-details" class="mdl-cell mdl-cell--9-col">
		<h4>Click on the desired payroll period to view contents of that payroll.</h4>
	</div>
</div>
