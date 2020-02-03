<?php
$query1 = "SELECT * FROM tbl_department ORDER BY d_id asc" or die("Error:" . mysqli_error());
$result1 = mysqli_query($con, $query1);

$query2 = "SELECT * FROM tbl_position ORDER BY p_id asc" or die("Error:" . mysqli_error());
$result2 = mysqli_query($con, $query2);


?>
<h4> เพิ่มสมาชิก </h4>
<form action="member_form_add_db.php" method="post" class="form-horizontal" enctype="multipart/form-data">

  <div class="form-group">
    <div class="col-sm-2 control-label">
      แผนก :
    </div>
    <div class="col-sm-2">
      <select name="ref_d_id" class="form-control" required>
              <option value="d_id">แผนก</option>
              <?php foreach($result1 as $results){?>
              <option value="<?php echo $results["d_id"];?>">
                <?php echo $results["d_name"]; ?>
              </option>
              <?php } ?>
            </select>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-2 control-label">
      ตำแหน่ง :
    </div>
    <div class="col-sm-2">
      <select name="ref_p_id" class="form-control" required>
              <option value="p_id">ตำแหน่ง</option>
              <?php foreach($result2 as $results){?>
              <option value="<?php echo $results["p_id"];?>">
                <?php echo $results["p_name"]; ?>
              </option>
              <?php } ?>
            </select>
    </div>
  </div>





  <div class="form-group">
    <div class="col-sm-2 control-label">
      สถานะ :
    </div>
    <div class="col-sm-2">
      <select name="m_level" class="form-control" required>
        <option value="">เลือกข้อมูล</option>
        <option value="admin">Admin</option>
        <option value="member">Member</option>
        <option value="technician">Technician</option>
        <option value="manager">Manager</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      Username :
    </div>
    <div class="col-sm-3">
      <input type="text" name="m_username" required class="form-control" autocomplete="off">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label" class="form-control" >
      Password :
    </div>
    <div class="col-sm-3">
      <input type="password" name="m_password" required class="form-control">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      คำนำหน้า :
    </div>
    <div class="col-sm-2">
      <select name="m_fname" class="form-control" required>
        <option value="">เลือกข้อมูล</option>
        <option value="นาย">นาย</option>
        <option value="นาง">นาง</option>
        <option value="นางสาว">นางสาว</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      ชื่อ :
    </div>
    <div class="col-sm-3">
      <input type="text" name="m_name" required class="form-control">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      นามสกุล :
    </div>
    <div class="col-sm-3">
      <input type="text" name="m_lname" required class="form-control">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      เบอร์โทร :
    </div>
    <div class="col-sm-3">
      <input type="text" name="m_phone" required class="form-control">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      อีเมล์ :
    </div>
    <div class="col-sm-3">
      <input type="email" name="m_email" required class="form-control">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      รูปภาพ :
    </div>
    <div class="col-sm-4">
      <input type="file" name="m_img" required class="form-control" accept="image/*">
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-3">
      <button type="submit" class="btn btn-primary">เพิ่มข้อมูล</button>
    </div>
  </div>
</form>