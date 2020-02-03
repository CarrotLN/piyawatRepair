<?php include('h.php');?>
<body class="hold-transition skin-red sidebar-mini">
  <div class="wrapper">
    <!-- Main Header -->
    <?php include('menutop.php');?>
    <!-- Left side column. contains the logo and sidebar -->
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
        <?php include('menu_l.php');?>
      </section>
      <!-- /.sidebar -->
    </aside>
    <div class="content-wrapper">
      <section class="content-header">
        <h1>
        รายการแจ้งซ่อมจากสมาชิก
        </h1>
      </section>
      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="box">
              <div class="row">
                <div class="col-sm-12">
                  <div class="box-body">
                    <p>
                      <a href="index.php" class="btn btn-primary"> 
                        NEW  <span class="badge"><?php echo  $ctotal1;?></span></a>
                      <a href="index.php?p=doing" class="btn btn-warning">
                       Asigned <span class="badge"><?php echo  $ctotal2;?></span></a>
                      <a href="index.php?p=close" class="btn btn-success">
                       Success <span class="badge"><?php echo  $ctotal3;?></span></a>
                     </p>
                   <?php 
                   $p=$_GET['p'];
                   if($p=='doing'){
                       include('case_list_doing.php');
                   }elseif($p=='close'){
                        include('case_list_close.php');
                   }elseif($p=='ass'){
                        include('case_assign.php'); 
                        include('member_list.php');
                   }elseif($p=='view'){
                      include('case_view.php');
                   }else{
                        include('case_list.php');
                   }
                   ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </body>
  </html>
  <?php include('footerjs.php');?>