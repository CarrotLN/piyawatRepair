<meta charset="utf-8">
<?php
 include('../condb.php');
	$d_name = $_POST["d_name"];

	$check = "
	SELECT  d_name 
	FROM tbl_department
	WHERE d_name = '$d_name' 
	";
    $result1 = mysqli_query($con, $check) or die(mysqli_error());
    $num=mysqli_num_rows($result1);

    if($num > 0)
    {
    echo "<script>";
    echo "alert(' ข้อมูลซ้ำ กรุณาเพิ่มใหม่อีกครั้ง !');";
    echo "window.history.back();";
    echo "</script>";
    }else{
	
	$sql = "INSERT INTO tbl_department
	(d_name)
	VALUES
	('$d_name')";
	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());

}
	mysqli_close($con);
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('เพิ่มข้อมูลสำเร็จ');";
	echo "window.location = 'depm.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	echo "window.location = 'depm.php'; ";
	echo "</script>";
}
?>