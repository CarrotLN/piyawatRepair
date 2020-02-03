<!DOCTYPE html>
<html>
  <head>
    <?php
    session_start();
    include('../condb.php');
    $m_id = $_SESSION['m_id'];
    $m_level = $_SESSION['m_level'];
     if($m_level!='member'){
    Header("Location: ../logout.php");
    }
    $sql = "SELECT m_name,m_img FROM tbl_member WHERE m_id=$m_id";
    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
    $row = mysqli_fetch_array($result);
    extract($row);
    $m_img = $row['m_img'];
    $m_name = $row['m_name'];

    //count case
    //new
    $sql2 = "SELECT COUNT(c_id) as c_total1 FROM tbl_case WHERE ref_s_id=1";
    $result2 = mysqli_query($con, $sql2);// or die ("Error in query: $sql " . mysqli_error());
    $row2 = mysqli_fetch_array($result2);
    $ctotal1=$row2['c_total1'];
    //dogin
    $sql3 = "SELECT COUNT(c_id) as c_total2 FROM tbl_case WHERE ref_s_id=2";
    $result3 = mysqli_query($con, $sql3);// or die ("Error in query: $sql " . mysqli_error());
    $row3 = mysqli_fetch_array($result3);
    $ctotal2=$row3['c_total2'];

    //close
    $sql4 = "SELECT COUNT(c_id) as c_total3 FROM tbl_case WHERE ref_s_id IN(3,4)";
    $result4 = mysqli_query($con, $sql4);// or die ("Error in query: $sql " . mysqli_error());
    $row4 = mysqli_fetch_array($result4);
    $ctotal3=$row4['c_total3'];
    //cancel
    $sql5 = "SELECT COUNT(c_id) as c_total4 FROM tbl_case WHERE ref_s_id IN(5)";
    $result5 = mysqli_query($con, $sql5);// or die ("Error in query: $sql " . mysqli_error());
    $row5 = mysqli_fetch_array($result5);
    $ctotal4=$row5['c_total4'];

    $sql = "SELECT * FROM tbl_member WHERE m_id=$m_id";
    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
    $row = mysqli_fetch_array($result);
    extract($row);
    $m_img = $row['m_img'];
    $m_fname = $row['m_fname'];
    $m_name = $row['m_name'];
    $m_lname = $row['m_lname'];
    $ref_p_id = $row['ref_p_id'];
    $ref_d_id = $row['ref_d_id'];
    ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ระบบแจ้งซ่อม</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
      <!-- Ionicons -->
      <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <!-- Tempusdominus Bbootstrap 4 -->
      <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
      <!-- iCheck -->
      <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
      <!-- JQVMap -->
      <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="../dist/css/adminlte.min.css">
      <!-- overlayScrollbars -->
      <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
      <!-- Daterange picker -->
      <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
      <!-- summernote -->
      <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.css">
      <!-- Google Font: Source Sans Pro -->
      <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
      <!-- DataTables -->
      <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.css">

      <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

      <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
      <link rel="shortcut icon" href="../img/Repair.ico" type="image/x-icon">

  </head>