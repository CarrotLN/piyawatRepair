<?php
$query = "
SELECT * FROM tbl_case as c
INNER JOIN tbl_status  as s ON c.ref_s_id=s.s_id
INNER JOIN tbl_device as d ON c.ref_de_id = d.de_id
INNER JOIN tbl_member as m ON c.ref_m_id = m.m_id
INNER JOIN tbl_position as p ON c.ref_p_id = p.p_id
INNER JOIN tbl_building as b ON c.ref_bid=b.bid
WHERE c.ref_s_id=1 AND c.c_id='$_GET[ID]'
ORDER BY c.c_id DESC" or die("Error:" . mysqli_error());
$rscase = mysqli_query($con, $query);
echo '<h4> ::รายการแจ้งซ่อมมาใหม่ รอ Assign:: </h4>';
echo ' <table  class="table table-bordered table-striped table-hover">';
  echo "<thead>";
    echo "<tr class='danger'>
      <th width='5%'>ID</th>
      <th width='10%'>อุปกรณ์</th>
      <th width='40%'>รายละเอียด</th>
      <th width='20%'>ภาพ</th>
     
    </tr>";
  echo "</thead>";
  // <th width='20%'>Assign</th>
  while($row = mysqli_fetch_array($rscase)) {
  echo "<tr>";
    echo "<td>" .$row["c_id"] .  "</td> ";
    echo "<td>" .$row["de_name"] .  "</td> ";
    echo "<td>"
      .'<b>'
      .$row["c_detail"]
      .'</b>'
      .'<br>'
      .' สถานะที่ : '
      .$row['bname']
      .' ชั้น '
      .$row['b_floor']
      .' ห้อง '
      .$row['b_room']
      ."<br>"
      .'ผู้แจ้ง ' .$row["m_fname"].$row["m_name"].' '.$row["m_lname"]
      ." "
      .'แผนก ' .$row["p_name"]
      ."<br>"
      .' ว/ด/ป '
      .date('d/m/Y H:i:s', strtotime($row['c_datesave']))
      ."<br>"
      ."<font color='red'>"
      .' สถานะ '
      .$row["s_name"]
      ."</font>"
    ."</td> ";
    echo "<td>";
      $c_img = $row["c_img"];
      if ($c_img =='') {
      
      }else {
      echo "<a href='../c_img/".$row['c_img']."' target='_blank'>";
        echo "<img src='../c_img/".$row['c_img']."' width='100%'>";
      echo "</a>";
      }  
    echo "</td>";
    //echo "<td><a href='index.php?p=ass&ID=$row[0]' class='btn btn-primary btn-xs'>Assign</a></td> ";
  echo "</tr>";
  }
echo "</table>";
 
?>