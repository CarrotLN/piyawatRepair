<meta charset="utf-8">
<?php
include('../condb.php');
	$de_id = $_POST['de_id'];
	$de_name = $_POST["de_name"];
	

	$sql = "UPDATE  tbl_device SET 
	de_name='$de_name'
	WHERE de_id=$de_id
	";

	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
	mysqli_close($con);
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('แก้ไขข้อมูลสำเร็จ');";
	echo "window.location = 'device.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	echo "window.location = 'device.php'; ";
	echo "</script>";
}
?>