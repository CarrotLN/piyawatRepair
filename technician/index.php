<?php include('h.php'); ?>
    <body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Main Header -->
        <?php include('menutop.php'); ?>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index.php" class="brand-link">
                <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                     style="opacity: .8">
                <span class="brand-text font-weight-light">Repair</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../m_img/<?php echo $m_img; ?>" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?php echo $m_name; ?></a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                           with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">
                                <i class="nav-icon fas fa-th-list"></i>
                                <p>
                                    รายการแจ้งซ่อม
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="member.php?act=edit" class="nav-link">
                                <i class="nav-icon far fa-address-card"></i>
                                <p>
                                    แก้ไขโปรไฟล์
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="member.php?act=pwd" class="nav-link">
                                <i class="nav-icon fas fa-wrench"></i>
                                <p>
                                    แก้ไขรหัสผ่าน
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../logout.php" class="nav-link"
                               onclick="return confirm('คุณต้องการออกจากระบบหรือไม่ ?');">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>
                                    ออกจากระบบ
                                </p>
                            </a>
                        </li>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <div class="content-wrapper">
            <br>
            <section class="content">
                <div class="row">

                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title-">รายการงานแจ้งซ่อม
                        </h3>
                    </div>
                    <div class="card-body">
                        <?php
                        $act = $_GET['act'];
                        if ($act == 'success') {
                            include('case_assign.php');
                        } elseif ($act == 'view') {
                            include('case_view.php');
                        } else {
                            include('case_list.php');
                        }
                        ?>
                    </div>
                </div>
            </section>
        </div>
    </div>
    </body>
<?php include('footerjs.php'); ?>