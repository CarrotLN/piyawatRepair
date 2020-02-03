<?php
$query = "
SELECT * FROM tbl_case as c
INNER JOIN tbl_status  as s ON c.ref_s_id=s.s_id 
INNER JOIN tbl_device as d ON c.ref_de_id = d.de_id
INNER JOIN tbl_building as b ON c.ref_bid=b.bid
LEFT JOIN tbl_job_proceduves as j ON c.c_id=j.ref_c_id
WHERE c.ref_m_id = $m_id
ORDER BY c.c_id DESC" or die("Error:" . mysqli_error());
$rscase = mysqli_query($con, $query);

echo ' <table id="example1" class="table table-bordered table-striped">';
  echo "<thead>";
    echo "<tr class='warning'>
      <th width='5%'>ID</th>
      <th width='10%'>อุปกรณ์</th>
      <th width='30%'>รายละเอียด</th>
      <th width='15%'>สถานะ</th>
      <th width='10%'>รูป</th>
      <th width='15%'>ช่าง</th>
      <th width='5%'>ประเมิน</th>
    </tr>";
  echo "</thead>";
  while($row = mysqli_fetch_array($rscase)) {
  echo "<tr>";
    echo "<td>" .$row["c_id"] .  "</td> ";
    echo "<td>" .$row["de_name"] .  "</td> ";
    echo "<td>" 
     .'<b>'
    .$row["c_detail"] 
     .'</b>'
    .'<br>'
    .$row['bname']
    .' ชั้น '
    .$row['b_floor']
    .' ห้อง '
    .$row['b_room']
    .  "</td> ";
      echo "<td>";
      echo $row["s_name"];
      echo "</td> ";
    echo "<td>";
    $c_img = $row["c_img"];
    if ($c_img =='') {
      
    }else {
     echo "<a href='../c_img/".$row['c_img']."' target='_blank'>";
      echo "<img src='../c_img/".$row['c_img']."' width='100'>";
      echo "</a>";
    }
   echo "</td>"; 

     echo "<td>" 
    .$row["ref_mer_name"] 
    ."<br>";
    if($row["j_datesave"]!=''){
    echo "วันที่";
    echo date('d/m/Y',strtotime($row["j_datesave"]));
    }else{
      echo '-';
    }
    echo "</td> ";
    echo "<td align='center'>";
    $ref_s_id = $row["ref_s_id"];
    if ($ref_s_id==3){
      echo " <a href='case.php?act=sys&ID=$row[0]' class='btn btn-danger btn-sm' target='_blank'>ประเมิน</a>";
    }elseif($ref_s_id==4){
      echo " <a href='case.php?act=view&ID=$row[0]' class='btn btn-success btn-sm' target='_blank'>เปิดดู</a>";
    }
    else{
      echo '-';
    }
    echo "</td>";
  echo "</tr>";
  }
echo "</table>";
mysqli_close($con);
?>