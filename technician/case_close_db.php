<meta charset="utf-8">
<?php
include('../condb.php');


// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
// exit;

if($_POST['submit']!='as'){
	    echo "<script>";
	    echo "alert('เกิดข้อผิดพลาด กรุณาติดต่อผู้ดูแลระบบ !');";
	    echo "window.history.back();";
	    echo "</script>";
}
    //$ref_mer_id = $_POST['ref_mer_id'];
    $ref_c_id =  $_POST['c_id'];
    $ref_s_id = 3;
    $j_detail =  $_POST['j_detail'];
    $j_date_complete = date('Y-m-d H:i:s');


    $sql = "UPDATE  tbl_job_proceduves SET 
    j_detail='$j_detail',
    j_date_complete='$j_date_complete'
    WHERE ref_c_id=$ref_c_id
	";
	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());


	$sql2 = "UPDATE  tbl_case SET 
	ref_s_id='$ref_s_id'
	WHERE c_id=$ref_c_id
	";
	$result2 = mysqli_query($con, $sql2) or die ("Error in query: $sql2 " . mysqli_error());


	mysqli_close($con);
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('บันทึกส่งงานข้อมูลสำเร็จ');";
	echo "window.location = 'index.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	echo "window.location = 'index.php'; ";
	echo "</script>";
}



?>