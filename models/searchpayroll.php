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
	
	$sql = "SELECT PAYROLL_ID FROM tbl_payroll WHERE PAYROLL_CLIENT LIKE '".$clientname."' OR PAYROLL_PERIOD LIKE '".$month."-".$period."-".$year."'";
	
	echo $sql;

	$result=mysqli_query($db,$sql) or die(mysqli_error($db));
		
		if(empty($result)){
			echo 'Company or period does not match, however we are searching for the name instead.';
			$sql2 = "SELECT * FROM tbl_personpages WHERE PERSONPAGES_LASTNAME LIKE '%".$personnellname."%' AND PERSONPAGES_MIDDLENAME LIKE '%".$personnelmname."%' AND PERSONPAGES_FIRSTNAME LIKE '".$personnelfname."%'";
		} else {
			while($values1 = mysqli_fetch_array($result)){
				$payroll_id = $values1['PAYROLL_ID'];
			}
			$sql2 = "SELECT * FROM tbl_personpages WHERE PERSONPAGES_PAYROLLID = ".$payroll_id." AND PERSONPAGES_LASTNAME LIKE '%".$personnellname."%' AND PERSONPAGES_MIDDLENAME LIKE '%".$personnelmname."%' AND PERSONPAGES_FIRSTNAME LIKE '".$personnelfname."%'";
		}
		
		echo $sql2;
		
		$result2=mysqli_query($db,$sql2) or die(mysqli_error($db));
		
		if(empty($result2)){
			echo 'No results. Bye';
		}
		else {
		 while($values = mysqli_fetch_array($result2)	){
			$counter++;
			echo $values['PERSONPAGES_FIRSTNAME'];
			echo $values['PERSONPAGES_MIDDLENAME'];
			echo $values['PERSONPAGES_LASTNAME'];
			
		}
		
		echo $counter;
		}
?>