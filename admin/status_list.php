<?php 
$query = "SELECT * FROM tbl_status ORDER BY s_id DESC" or die("Error:" . mysqli_error());
$result = mysqli_query($con, $query);
echo ' <table id="example1" class="table table-bordered table-striped">';
  echo "<thead>";
    echo "<tr class='warning'>
      <th width='5%'>ID</th>
      <th>สถานะ</th>
      <th width='5%'>แก้ไข</th>
    </tr>";
  echo "</thead>";
  while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
    echo "<td>" .$row["s_id"] .  "</td> ";
    echo "<td>" .$row["s_name"] .  "</td> ";
    echo "<td><a href='status.php?act=edit&ID=$row[0]' class='btn btn-warning btn-sm'>แก้ไข</a></td> ";
  echo "</tr>";
  }
echo "</table>";
mysqli_close($con);
?>