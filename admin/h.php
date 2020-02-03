<?php session_start();?>
<!DOCTYPE html>
<html>
  <head>
    <?php
//    session_start();
    include('../condb.php');
    $m_id = $_SESSION['m_id'];
    $m_name = $_SESSION['m_name'];
    $m_level = $_SESSION['m_level'];
    if($m_level!='admin'){
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
    $sql2 = "SELECT COUNT(c_id) as ctotal1 FROM tbl_case WHERE ref_s_id=1";
    $result2 = mysqli_query($con, $sql2);// or die ("Error in query: $sql " . mysqli_error());
    $row2 = mysqli_fetch_array($result2);
    $ctotal1=$row2['ctotal1'];
    //dogin
    $sql3 = "SELECT COUNT(c_id) as ctotal2 FROM tbl_case WHERE ref_s_id=2";
    $result3 = mysqli_query($con, $sql3);// or die ("Error in query: $sql " . mysqli_error());
    $row3 = mysqli_fetch_array($result3);
    $ctotal2=$row3['ctotal2'];

    //close
    $sql4 = "SELECT COUNT(c_id) as ctotal3 FROM tbl_case WHERE ref_s_id IN(3,4)";
    $result4 = mysqli_query($con, $sql4);// or die ("Error in query: $sql " . mysqli_error());
    $row4 = mysqli_fetch_array($result4);
    $ctotal3=$row4['ctotal3'];
    //cancel
    $sql5 = "SELECT COUNT(c_id) as ctotal4 FROM tbl_case WHERE ref_s_id =5";
    $result5 = mysqli_query($con, $sql5);// or die ("Error in query: $sql " . mysqli_error());
    $row5 = mysqli_fetch_array($result5);
    $ctotal4=$row5['ctotal4'];
    ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>ระบบแจ้งซ่อม</title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
      <!-- overlayScrollbars -->
      <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
      <!-- Google Font: Source Sans Pro -->
      <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
      <!-- DataTables -->
      <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.css">

      <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
      <link rel="shortcut icon" href="../img/Repair.ico" type="image/x-icon">

      <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

  </head>