<meta charset="utf-8">
<?php
include('../condb.php');

	$m_id = $_POST["m_id"];
	$m_fname = $_POST["m_fname"];
	$m_name = $_POST["m_name"];
	$m_lname = $_POST["m_lname"];
	$m_phone = $_POST["m_phone"];	
	$m_email = $_POST["m_email"];
	$m_img2 =$_POST["m_img2"];

	$date1 = date("Ymd_His");
	$numrand = (mt_rand());
	$m_img = (isset($_POST['m_img']) ? $_POST['m_img'] : '');
	$upload=$_FILES['m_img']['name'];
	if($upload !='') { 

		$path="../m_img/";
		$type = strrchr($_FILES['m_img']['name'],".");
		$newname =$numrand.$date1.$type;
		$path_copy=$path.$newname;
		$path_link="../m_img/".$newname;
		move_uploaded_file($_FILES['m_img']['tmp_name'],$path_copy);  
	}else{
		$newname=$m_img2;
	}

	$sql = "UPDATE tbl_member SET 
	m_fname='$m_fname',
	m_name='$m_name',
	m_lname='$m_lname',
	m_phone='$m_phone',
	m_email='$m_email',
	m_img='$newname'
	WHERE m_id=$m_id
	 ";

	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
	mysqli_close($con);
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('แก้ไขข้อมูลสำเร็จ');";
	echo "window.location = 'member.php?act=edit'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	echo "window.location = 'member.php'; ";
	echo "</script>";
}
?>