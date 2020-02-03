<meta charset="utf-8">
<?php
 include('../condb.php');
	$d_id = $_POST['d_id'];
	$d_name = $_POST["d_name"];
	

	$sql = "UPDATE  tbl_department SET 
	d_name='$d_name'
	WHERE d_id=$d_id
	";

	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
	mysqli_close($con);
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('แก้ไขข้อมูลสำเร็จ');";
	echo "window.location = 'depm.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	echo "window.location = 'depm.php'; ";
	echo "</script>";
}
?>