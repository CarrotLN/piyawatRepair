<?php include('h.php'); ?>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <?php include('menutop.php'); ?>
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index.php" class="brand-link">
            <img src="../dist/img/wrench.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">Piyawat Repair</span>
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
                        <a href="member.php" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                จัดการสมาชิก
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="position.php" class="nav-link">
                            <i class="nav-icon fas fa-level-up-alt"></i>
                            <p>
                                จัดการตำแหน่ง
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="device.php" class="nav-link">
                            <i class="nav-icon fas fa-wrench"></i>
                            <p>
                                จัดการอุปกรณ์
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="status.php" class="nav-link">
                            <i class="nav-icon fas fa-signal"></i>
                            <p>
                                จัดการสถานะ
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="depm.php" class="nav-link">
                            <i class="nav-icon fas fa-tasks"></i>
                            <p>
                                จัดการแผนก
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
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">

                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">รายการแจ้งซ่อม</h3>
                    </div>
                    <div class="card-body">
                        <p>
                            <a href="index.php" class="btn btn-primary">
                                รายการใหม่ <span class="badge"><?php echo $ctotal1; ?></span></a>
                            <a href="index.php?p=doing" class="btn btn-warning">
                                กำลังดำเนินการ <span class="badge"><?php echo $ctotal2; ?></span></a>
                            <a href="index.php?p=close" class="btn btn-success">
                                สำเร็จ <span class="badge"><?php echo $ctotal3; ?></span></a>
                            <a href="index.php?p=cancel" class="btn btn-danger">
                                ยกเลิก <span class="badge"><?php echo $ctotal4; ?></span></a>
                        </p>
                        <?php
                        $p = $_GET['p'];
                        if ($p == 'doing') {
                            include('case_list_doing.php');
                        } elseif ($p == 'close') {
                            include('case_list_close.php');
                        } elseif ($p == 'cancel') {
                            include('case_assign_cancel.php');
                        } elseif ($p == 'canceled') {
                            include('case_assign_cancel_1.php');
                        } elseif ($p == 'ass') {
                            include('case_assign.php');
                            include('tech_list.php');
                        } elseif ($p == 'view') {
                            include('case_view.php');
                        } else {
                            include('case_list.php');
                        }
                        ?>
                    </div>
                </div>
            </div>

        </section>

    </div>
</body>
<?php include('footerjs.php'); ?>


