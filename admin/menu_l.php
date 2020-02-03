<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
        <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img  src="../m_img/<?php echo $m_img; ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?php echo $m_name; ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="member.php" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            จัดการสมาชิก
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="position.php" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            จัดการตำแหน่ง
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="device.php" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            จัดการอุปกรณ์
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="status.php" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            จัดการสถานะ
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="depm.php" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            จัดการแผนก
                        </p>
                    </a>
                </li>
                <li>
                    <a href="../logout.php" onclick="return confirm('คุณต้องการออกจากระบบหรือไม่ ?');">
                        <i class="fa fa-sign-out"></i>
                        <span> ออกจากระบบ</span>
                    </a>
                </li>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>