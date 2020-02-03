 <form method="post" action="assign_db.php" class="form-horizontal">
<?php
$queryt = "
SELECT m.m_fname,m.m_name,m.m_lname,m.m_img,m.m_phone,m.m_id
FROM tbl_member as m
WHERE m.m_level='technician'
ORDER BY m.m_id DESC" or die("Error:" . mysqli_error());
$resultt = mysqli_query($con, $queryt);
//echo $queryt;
echo '<h4> :: รายการช่าง :: </h4>';
echo ' <table   class="table table-bordered table-striped">';
  echo "<thead>";
    echo "<tr class='danger'>
      <th width='5%'>#</th>
      <th width='5%'>รูป</th>
      <th width='50%'>ชื่อ-สกุล</th>
      <th width='5%'><center>doing</center></th>
      <th width='5%'><center>close</center></th>
    </tr>";
  echo "</thead>";
  while($rowt = mysqli_fetch_array($resultt)) {
    //ช่่าง
    $mer_name = $rowt["m_fname"].$rowt["m_name"]. ' '.$rowt["m_lname"];
    $ref_mer_id = $rowt["m_id"]; //รหัสช่าง
  echo "<tr>";
    echo "<td>";?>
     
        <input type="radio" name="ref_mer_id" value="<?php echo $rowt["m_id"];?>-<?php echo $mer_name;?>" required> เลือก <br>

      <?php
    echo "</td> ";
    echo "<td>"."<img src='../m_img/".$rowt['m_img']."' width='100%'>"."</td>";
    echo "<td>" .$rowt["m_fname"].$rowt["m_name"] .' '.$rowt["m_lname"]
    .'<br>'.' โทร. '.$rowt["m_phone"]. "</td> ";
    echo "<td align='center'>";
    //doing job
    $sqlmerdoing = "SELECT COUNT(j_id) as dtotal FROM tbl_job_proceduves 
    WHERE ref_mer_id=$ref_mer_id AND j_date_complete is NULL ";
    $resultmerd = mysqli_query($con, $sqlmerdoing);
    $rowmerd = mysqli_fetch_array($resultmerd);
    echo $rowmerd['dtotal'];
    echo "</td>";
   echo "<td align='center'>";
    //doing close
    $sqlmerclose = "SELECT COUNT(j_id) as ctotal FROM tbl_job_proceduves 
    WHERE ref_mer_id=$ref_mer_id AND j_date_complete!='' ";
    $resultmerc = mysqli_query($con, $sqlmerclose);
    $rowmerc = mysqli_fetch_array($resultmerc);
    echo $rowmerc['ctotal'];
    echo "</td>";
  echo "</tr>";
  }
echo "</table>";
mysqli_close($con);
?>
<div class="form-group">
<input type="hidden" name="ref_c_id" value="<?php echo $_GET['ID'];?>">
<input type="hidden" name="ref_s_id" value="2">
<input type="hidden" name="ref_h_name" value="<?php echo $m_name;?>">
<input type="hidden" name="ref_h_id" value="<?php echo $h_id;?>">
  </div>
  <p align="right">
    <button type="submit" class="btn btn-primary" name="submit" value="as"> บันทึก </button>
  </p>
</form>