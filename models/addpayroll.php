
<?php
// include '../models/searchclient.php';

include '../models/connect.php';
$client = $_POST['client'];
$period = $_POST['month'] . '-'. $_POST['period'].'-'. $_POST['year'];



// if($counter == 0){
// 	$query =  'INSERT INTO tbl_client (CLIENT_NAME) VALUES ("'.$client.'","'.$period.'")';
// }

$images = array();
$fname = array();
$mname = array();
$lname = array();
$bday = array();

$query =  'INSERT INTO tbl_payroll (PAYROLL_CLIENT, PAYROLL_PERIOD) VALUES ("'.$client.'","'.$period.'")';
$result = mysqli_query($con, $query) or die(mysqli_error($con));

$query =  'SELECT PAYROLL_ID FROM tbl_payroll ORDER BY PAYROLL_ID DESC';
$result = mysqli_query($con, $query) or die(mysqli_error($con));

$array = mysqli_fetch_array( $result );
$pid =  $array['PAYROLL_ID'];



for($i=1; $i<31; $i++){
	
		array_push($images, $_POST['imglink'.$i]);

	

	for($j=1; $j<31; $j++){
		array_push($lname, $_POST[$i.'lname'.$j]);
		array_push($fname, $_POST[$i.'fname'.$j]);
		array_push($mname, $_POST[$i.'mname'.$j]);
		array_push($bday, $_POST[$i.'bday'.$j]);
	}
}

for($i=1; $i<31; $i++){
		
	

		if($images[$i-1] == ''){
			
		}else{
			$query =  'INSERT INTO tbl_payrollpages (PAYROLLPAGES_PAYROLLID, PAYROLLPAGES_PAGENO, PAYROLLPAGES_DOCPATH) VALUES ("'.$pid.'","'.$i.'","'.$images[$i-1].'")';
			$result = mysqli_query($con, $query) or die(mysqli_error($con));
			
			$query =  'SELECT PAYROLLPAGES_ID FROM tbl_payrollpages ORDER BY PAYROLLPAGES_ID DESC';
			$result = mysqli_query($con, $query) or die(mysqli_error($con));

			$array = mysqli_fetch_array( $result );
			$pid_pp =  $array['PAYROLLPAGES_ID'];
			

			for($j=1; $j<31; $j++){


				if($mname[$j-1] == '' && $fname[$j-1] == '' && $lname[$j-1] == '' && $bday[$j-1] == ''){
					
				}else{

					$query =  'INSERT INTO tbl_personpages
					 (PERSONPAGES_PAYROLLID, PERSONPAGES_PAYROLLPAGEID, PERSONPAGES_LASTNAME, PERSONPAGES_FIRSTNAME, PERSONPAGES_MIDDLENAME, PERSONPAGES_DATEOFBIRTH) VALUES ("'.$pid.'","'.$pid_pp.'","'.$lname[$j-1].'", "'.$fname[$j-1].'", "'.$mname[$j-1].'", "'.$bday[$j-1].'")';
					$result = mysqli_query($con, $query) or die(mysqli_error($con));
				}
	
			}
		}
	
}
	header("Location: ../dashboard/payroll.php?success=1");
	die();
?>