<meta charset="utf-8">
<?php
include('../condb.php');
	$m_id  = $_POST["m_id"];
	$m_password1  = sha1($_POST["m_password1"]);
	$m_password2  = sha1($_POST["m_password2"]);

	if($m_password1 != $m_password2){
		echo "<script type='text/javascript'>";
		echo "alert('password ไม่ตรงกัน กรุณาใส่่ใหม่อีกครั้ง ');";
		echo "window.location = 'member.php?act=pwd'; ";
		echo "</script>";
	}else{
	$sql = "UPDATE tbl_member SET 
	m_password='$m_password1'
	WHERE m_id=$m_id
	 ";
	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
	}
	mysqli_close($con);
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('แก้ไข password สำเร็จ');";
	echo "window.location = 'index.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	echo "window.location = 'index.php'; ";
	echo "</script>";
}
?>