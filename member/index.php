<?php include('h.php'); ?>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Main Header -->
    <?php include('menutop.php'); ?>
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
                    <li class="nav-item has-treeview">
                        <a href="case.php" class="nav-link">
                            <i class="nav-icon fas fa-th-list"></i>
                            <p>
                                รายการแจ้งซ่อม
                                <i class="fas fa-angle-left right"></i>
                                <span class="badge badge-info right"></span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="case.php?act=add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>แจ้งซ่อมอุปกรณ์</p>
                                </a>
                            </li>
                        </ul>
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
                            <a href="index.php?p=doing" class="btn btn-warning">
                                รอการดำเนิน <span class="badge"><?php echo $ctotal1; ?></span></a>
                            <a href="index.php?p=fix" class="btn btn-success">
                                กำลังซ่อม <span class="badge"><?php echo $ctotal2; ?></span></a>
                            <a href="index.php?p=close" class="btn btn-success">
                                สำเร็จ <span class="badge"><?php echo $ctotal3; ?></span></a>
                            <a href="index.php?p=canceled" class="btn btn-danger">
                                ยกเลิก <span class="badge"><?php echo $ctotal4; ?></span></a>
                        </p>
                        <?php
                        $p = $_GET['p'];
                        if ($p == 'doing') {
                            include('case_list_doing.php');
                        } elseif ($p == 'fix') {
                            include('case_assigned.php');
                        } elseif ($p == 'close') {
                            include('case_list_close.php');
                        } elseif ($p == 'canceled') {
                            include('case_assign_cancel.php');
                        } elseif ($p == 'view') {
                            include('case_assign.php');
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

