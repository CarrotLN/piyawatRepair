<?php include('h.php'); ?>
    <body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Main Header -->
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
                        <div class="col-sm-6">
                            <h1>ตำแหน่ง</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>


            <section class="content">
                <div class="row">
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">จัดการตำแหน่ง
                            <a href="position.php?act=add" class="btn-info btn-sm"><i class="fas fa-plus"></i> เพิ่มตำแหน่ง</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <?php
                        $act = $_GET['act'];
                        if ($act == 'add') {
                            include('position_form_add.php');
                        } elseif ($act == 'edit') {
                            include('position_form_edit.php');
                        } else {
                            include('position_list.php');
                        }
                        ?>
                    </div>
                </div>
            </section>
        </div>
            <footer class="main-footer">
                <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
                All rights reserved.
                <div class="float-right d-none d-sm-inline-block">
                    <b>Version</b> 3.0.2-pre
                </div>

            </footer>
    </body>
    </html>
<?php include('footerjs.php'); ?>

