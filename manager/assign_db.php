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
    $ref_c_id =  $_POST['ref_c_id'];
    $ref_s_id =  $_POST['ref_s_id'];
    $ref_h_name =  $_POST['ref_h_name'];
    $ref_h_id =  $_POST['ref_h_id'];

    		$rs = $_POST['ref_mer_id'];  // value ที่ส่งมา
            $rs_explode = explode('-', $rs);   // ขั้นด้วย '-
          
            $ref_mer_id = $rs_explode[0];
            $ref_mer_name =$rs_explode[1];




    $sql = "INSERT INTO tbl_job_proceduves
	(ref_mer_id,ref_mer_name, ref_c_id,  ref_h_name, ref_h_id)
	VALUES
	('$ref_mer_id', '$ref_mer_name', '$ref_c_id', '$ref_h_name', '$ref_h_id')";
	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());

	$sql2 = "UPDATE  tbl_case SET 
	ref_s_id='$ref_s_id'
	WHERE c_id=$ref_c_id
	";
	$result2 = mysqli_query($con, $sql2) or die ("Error in query: $sql2 " . mysqli_error());
 

	mysqli_close($con);
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('บันทึกข้อมูลสำเร็จ');";
	echo "window.location = 'index.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	echo "window.location = 'index.php'; ";
	echo "</script>";
}




?>