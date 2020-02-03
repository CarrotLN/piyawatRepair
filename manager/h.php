<!DOCTYPE html>
<html>
<head>
    <?php
    session_start();
    include('../condb.php');
    $m_id = $_SESSION['m_id'];
    $h_id = $_SESSION['m_id'];
    $m_level = $_SESSION['m_level'];
    if ($m_level != 'manager') {
        Header("Location: ../logout.php");
    }
    $sql = "SELECT * FROM tbl_member WHERE m_id=$m_id";
    $result = mysqli_query($con, $sql);// or die ("Error in query: $sql " . mysqli_error());
    $row = mysqli_fetch_array($result);
    extract($row);
    $m_img = $row['m_img'];
    $m_neme = $row['m_neme'];
    $ref_p_id = $row['ref_p_id'];
    $ref_d_id = $row['ref_d_id'];

    //count case
    //new
    $sql2 = "SELECT COUNT(c_id) as ctotal1 FROM tbl_case WHERE ref_s_id=1";
    $result2 = mysqli_query($con, $sql2);// or die ("Error in query: $sql " . mysqli_error());
    $row2 = mysqli_fetch_array($result2);
    $ctotal1 = $row2['ctotal1'];
    //dogin
    $sql3 = "SELECT COUNT(c_id) as ctotal2 FROM tbl_case WHERE ref_s_id=2";
    $result3 = mysqli_query($con, $sql3);// or die ("Error in query: $sql " . mysqli_error());
    $row3 = mysqli_fetch_array($result3);
    $ctotal2 = $row3['ctotal2'];

    //close
    $sql4 = "SELECT COUNT(c_id) as ctotal3 FROM tbl_case WHERE ref_s_id IN(3,4)";
    $result4 = mysqli_query($con, $sql4);// or die ("Error in query: $sql " . mysqli_error());
    $row4 = mysqli_fetch_array($result4);
    $ctotal3 = $row4['ctotal3'];
    ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ระบบแจ้งซ่อม</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="shortcut icon" href="./img/Repair.ico" type="image/x-icon">

</head>