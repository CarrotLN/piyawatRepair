<?php
$query = "SELECT * FROM tbl_device ORDER BY de_id asc" or die("Error:" . mysqli_error());
$result = mysqli_query($con, $query);
//buiding
$query2 = "SELECT * FROM tbl_building" or die("Error:" . mysqli_error());
$result2 = mysqli_query($con, $query2);
?>
<h4> แจ้งซ่อม โดยคุณ <?php echo $m_fname.$m_name .' '.$m_lname;?> </h4>
<form action="case_form_add_db.php" method="post" class="form-horizontal" enctype="multipart/form-data">
  <div class="form-group">
    <div class="col-sm-2 control-label">
      ตึก :
    </div>
    <div class="col-sm-3">
      <select name="ref_bid" class="form-control" required>
        <option value="">-เลือกตึก/อาคาร-</option>
        <?php foreach($result2 as $result2){?>
        <option value="<?php echo $result2["bid"];?>">
          <?php echo $result2["bname"]; ?>
        </option>
        <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      ชั้น :
    </div>
    <div class="col-sm-2">
      <input type="number" name="b_floor" class="form-control" required>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      ห้อง :
    </div>
    <div class="col-sm-2">
      <input type="number" name="b_room" class="form-control" required>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      อุปกรณ์ :
    </div>
    <div class="col-sm-2">
      <select name="ref_de_id" class="form-control" required>
        <option value="">-เลือกอุปกรณ์-</option>
        <?php foreach($result as $results){?>
        <option value="<?php echo $results["de_id"];?>">
          <?php echo $results["de_name"]; ?>
        </option>
        <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      รายละเอียด :
    </div>
    <div class="col-sm-4">
      <textarea name="c_detail" required class="form-control" rows="4" cols="50" style="background-color:#99FFFF;"></textarea>
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-2 control-label">
      รูปภาพ :
    </div>
    <div class="col-sm-3">
      <input type="file" name="c_img" class="form-control" accept="image/*">
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-3">
      <input type="hidden" name="ref_m_id" value="<?php echo $m_id; ?>" />
      <input type="hidden" name="ref_p_id" value="<?php echo $m_id; ?>" />
      <input type="hidden" name="ref_d_id" value="<?php echo $m_id; ?>" />
      <button type="submit" class="btn btn-primary">แจ้งซ่อม</button>
    </div>
  </div>
</form>