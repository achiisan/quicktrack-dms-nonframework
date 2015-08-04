<?php



$query = $_GET['q'];
 $db = mysqli_connect('localhost', 'root') or die ('Unable to connect. Check your connection parameters.');
 mysqli_select_db($db, 'qtdms');

 	//$query = mysqli_real_escape_string($db, $query);

 	$sql = "SELECT DISTINCT PAYROLL_CLIENT FROM tbl_payroll WHERE PAYROLL_CLIENT LIKE '%".$query."%'";
 	// echo $sql;

 	$result=mysqli_query($db,$sql) or die(mysqli_error($db));
	$counter = 0;   

		while($values1 = mysqli_fetch_array($result)){
			?>
			<a onclick="setValue('<?php echo $values1['PAYROLL_CLIENT']?>')">
			<div class="result">
			<?php
			echo $values1['PAYROLL_CLIENT'].'</br></div></a>';
			$counter++;
		}

		if($counter == 0){
			echo "No results found.";
		}

	

?>