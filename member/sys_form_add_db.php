<meta charset="utf-8">
<?php
include('../condb.php');


// print_r($_POST);

// exit;

	$ref_c_id = $_POST["ref_c_id"];
	$a_score = $_POST["a_score"];


	$sql = "INSERT INTO tbl_assessment
	(
	ref_c_id,
	a_score
	)
	VALUES
	(
	'$ref_c_id',
	'$a_score'
	)";

	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());

	
	$sql1 = "UPDATE  tbl_case SET 
	ref_s_id = 4
	WHERE c_id=$ref_c_id
	";

	$result1 = mysqli_query($con, $sql1) or die ("Error in query: $sql1 " . mysqli_error());
	mysqli_close($con);

	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('ประเมินสำเร็จ');";
	echo "window.location = 'case.php?act=view&ID=$ref_c_id'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	echo "window.location = 'case.php'; ";
	echo "</script>";
}
?>