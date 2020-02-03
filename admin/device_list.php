<?php 
$query = "SELECT * FROM tbl_device ORDER BY de_id DESC" or die("Error:" . mysqli_error());
$result = mysqli_query($con, $query);
echo ' <table id="example1" class="table table-bordered table-striped">';
  echo "<thead>";
    echo "<tr class='warning'>
      <th width='5%'>ID</th>
      <th>อุปกรณ์</th>
      <th width='10%'>แก้ไข</th>
    </tr>";
  echo "</thead>";
  while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
    echo "<td>" .$row["de_id"] .  "</td> ";
    echo "<td>" .$row["de_name"] .  "</td> ";
    echo "<td><a href='device.php?act=edit&ID=$row[0]' class='btn btn-warning btn-sm'>แก้ไข</a>
<a href='device_del_db.php?ID=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\" class='btn btn-danger btn-sm'>ลบ</a></td> ";
  echo "</tr>";
  }
echo "</table>";
mysqli_close($con);
?>