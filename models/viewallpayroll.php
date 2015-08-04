	<script>
			// this is the id of the form
		$("tr.clickable").click(function() {

		
		
		    var url = "../models/viewallpayroll_rest.php"; // the script where you handle the form input.
		    $('#viewall-results').empty(); 
		     $('#viewall-results').append('  <div class="mdl-spinner mdl-js-spinner is-active"></div>');

		  
		    $.ajax({
		           type: "POST",
		           url: url,
		           data:{clientname: $('.clientname',this).text()},// serializes the form's elements.
		           success: function(data)
		           {
		           	  $('#viewall-results').empty(data); 
		             $('#viewall-results').append(data); // show response from the php script.
		           }
		         });
		      event.preventDefault(); // cancel default behavior
		   return false;// avoid to execute the actual submit of the form.
		

		});
	</script>


<?php
 $db = mysqli_connect('localhost', 'root','', 'qtdms') or die ('Unable to connect. Check your connection parameters.');
?>

<div class="mdl-cell mdl-cell--12-col mdl-grid">
	<div class="mdl-cell mdl-cell--3-col">
			<table id="client_table" class="mdl-data-table mdl-js-data-table  mdl-shadow--2dp">
		  <thead>
		    <tr>
		      <th class="mdl-data-table__cell--non-numeric">Client Name</th>
		      <th>Total Entries</th>
		    
		    </tr>
		  </thead>
		  <tbody>
		  	<?php
		  		$sql = "SELECT PAYROLL_CLIENT, COUNT(*) COUNT FROM tbl_payroll GROUP BY PAYROLL_CLIENT";
			$result=mysqli_query($db,$sql) or die(mysqli_error($db));
			 $counter = 0;       
				
				while($values1 = mysqli_fetch_array($result)){

					$client = $values1['PAYROLL_CLIENT'];
					$count = $values1['COUNT'];
				?>
			
		    <tr class="clickable">
		    	
		      <td class="mdl-data-table__cell--non-numeric clientname"><?php echo $client ?></td>
		      <td><?php echo $count ?></td>
		      
		    </tr>
		  	<?php
		  		}
		  	?>
		  </tbody>
		</table>
	</div>
	<div id="viewall-results" class="mdl-cell mdl-cell--9-col mdl-grid">
				<h4 align="center">Click on a Client to View its Records.</h4>
	</div>
</div>