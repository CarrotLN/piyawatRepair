<meta charset="utf-8">
<?php
include('../condb.php');


// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
// exit;


	$ref_m_id = $_POST["ref_m_id"];
	$ref_p_id = $_POST["ref_p_id"];
	$ref_d_id = $_POST["ref_d_id"];
	$ref_de_id = $_POST["ref_de_id"];
	$c_detail = $_POST["c_detail"];
	$ref_bid  = $_POST["ref_bid"];
	$b_floor = $_POST["b_floor"];
	$b_room  = $_POST["b_room"];

	if($c_detail !=''){

	$date1 = date("Ymd_His");
	$numrand = (mt_rand());
	$c_img = (isset($_POST['c_img']) ? $_POST['c_img'] : '');
	$upload=$_FILES['c_img']['name'];
	if($upload !='') { 
	
		$path="../c_img/";
		$type = strrchr($_FILES['c_img']['name'],".");
		$newname =$numrand.$date1.$type;
		$path_copy=$path.$newname;
		$path_link="../c_img/".$newname;
		move_uploaded_file($_FILES['c_img']['tmp_name'],$path_copy);  
	}else {
		$newname = '';
	}


	$sql = "INSERT INTO tbl_case
	(
	ref_m_id,
	ref_p_id,
	ref_d_id,
	ref_de_id,
	c_detail,
	c_img,
	ref_bid,
	b_floor,
	b_room
	)
	VALUES
	(
	'$ref_m_id',
	'$ref_p_id',
	'$ref_d_id',
	'$ref_de_id',
	'$c_detail',
	'$newname',
	 $ref_bid,
	 '$b_floor',
	'$b_room'
	)";

	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
	mysqli_close($con);
	} //close chk !empty 
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('แจ้งซ่อมสำเร็จ');";
	echo "window.location = 'case.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	echo "window.location = 'case.php'; ";
	echo "</script>";
}
?>