<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="../m_img/<?php echo $m_img; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>คุณ <?php echo $m_name; ?></p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <ul class="sidebar-menu" data-widget="tree">
      <li>
        <a href="index.php"><i class="fa fa-home"></i>
          <span> หน้าหลัก </span>
        </a>
      </li>
      <li>
        <a href="member.php?act=edit"><i class="fa fa-edit"></i>
          <span>แก้ไขโปรไฟล์</span>
        </a>
      </li>
      <li>
        <a href="member.php?act=pwd"><i class="fa fa-edit"></i>
          <span>แก้ไขรหัสผ่าน</span>
        </a>
      </li>
      <li>
        <a href="case.php"><i class="fa fa-edit"></i>
          <span> แจ้งซ่อม</span>
        </a>
      </li>
      <li>
        <a href="case.php"><i class="fa fa-edit"></i>
          <span> ติดตามงานแจ้งซ่อม</span>
        </a>
      </li>
      
      <li>
        <a href="../logout.php" onclick="return confirm('คุณต้องการออกจากระบบหรือไม่ ?');"><i class="fa fa-sign-out"></i>
          <span> ออกจากระบบ</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>