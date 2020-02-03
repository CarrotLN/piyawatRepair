<?php
$query = "
SELECT * FROM tbl_member as m
INNER JOIN tbl_department  as d ON m.ref_d_id=d.d_id 
INNER JOIN tbl_position  as p ON m.ref_p_id=p.p_id 
ORDER BY m.m_id DESC" or die("Error:" . mysqli_error());
$result = mysqli_query($con, $query);
echo ' <table id="example1" class="table table-bordered table-striped">';
echo "<thead>";
echo "<tr class='warning'>
      <th >ID</th>
      <th width='7%' >รูป</th>
      <th >ชื่อผู้ใช้</th>
      <th >ชื่อ_สกุล</th>
      <th >แผนก</th>
      <th >ตำแหน่ง</th>
      <th >สภานะ</th>
      <th width='26%'>แก้ไข</th>
    </tr>";
echo "</thead>";
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row["m_id"] . "</td> ";
    echo "<td>" . "<img   src='../m_img/" . $row['m_img'] . "' class=\"img-circle\" width='100%' >" . "</td>";
    echo "<td>" . $row["m_username"]
        . "<br>"
        . "</td> ";
    echo "<td>" . $row["m_fname"] . $row["m_name"]
        . ' ' . $row["m_lname"]
        . '<br>'
        . ' โทร. '
        . $row["m_phone"]
        . '<br>'
        . ' email '
        . $row["m_email"]
        . "</td> ";
    echo "<td>" . $row["d_name"] . "</td> ";
    echo "<td>" . $row["p_name"] . "</td> ";
    echo "<td>" . $row["m_level"] . "</td> ";
    echo "<td>
            <a href='member.php?act=edit&ID=$row[0]' class='btn btn-info'>แก้ไขข้อมูล</a>
            <a href='member.php?ID=$row[0]&act=rwd' class='btn btn-primary'>เปลี่ยนรหัสผ่าน</a>
            <a href='member_del_db.php?ID=$row[0]' onclick=\"return confirm('ต้องการลบข้อมูลสมาชิกคนนี้หรือไม่?')\" class='btn btn-danger'>ลบ</a>
    <br>    
            </td> ";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>