<?php
$query = "SELECT * FROM tbl_member ORDER BY m_id DESC" or die("Error:" . mysqli_error());
$result = mysqli_query($con, $query);
echo ' <table id="example1" class="table table-bordered table-striped">';
  echo "<thead>";
    echo "<tr class='warning'>
      <th width='5%'>ID</th>
      <th width='15%'>รูป</th>
      <th width='10%'>user</th>
      <th width='30%'>ชื่อ_สกุล</th>
      <th width='10%'>เบอร์โทร</th>
      <th width='10%'>อีเมล์</th>
      <th width='10%'>สภานะ</th>
      <th width='5%'>แก้ไข</th>
      <th width='5%'>ลบ</th>
    </tr>";
  echo "</thead>";
  while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
    echo "<td>" .$row["m_id"] .  "</td> ";
    echo "<td>"."<img src='../m_img/".$row['m_img']."' width='100'>"."</td>";
    echo "<td>" .$row["m_username"] .  "</td> ";
    echo "<td>" .$row["m_fname"].$row["m_name"] .' '.$row["m_lname"] . "</td> ";
    echo "<td>" .$row["m_phone"] .  "</td> ";
    echo "<td>" .$row["m_email"] .  "</td> ";
    echo "<td>" .$row["m_level"] .  "</td> ";
    echo "<td><a href='member.php?act=edit&ID=$row[0]' class='btn btn-warning btn-xs'>แก้ไข</a>
    
    </td> ";
    echo "<td>
            <a href='member.php?ID=$row[0]&act=rwd' class='btn btn-primary btn-xs'>rpwd</a></td> ";
  echo "</tr>";
  }
echo "</table>";
mysqli_close($con);
?>