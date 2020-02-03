<?php
include('h.php');

$query_device = "SELECT * FROM tbl_device ORDER BY de_id ASC";
//$device = mysqli_query($query_device, $con) or die(mysqli_error());
$device = mysqli_query( $con,$query_device) or trigger_error(mysqli_error($con));
$row_device = mysqli_fetch_assoc($device);
$totalRows_device = mysqli_num_rows($device);
?>
<table border="1" class="table table-bordered">
    <tr class="info">
        <td width="15%" align="center">รหัสอุปกรณ์</td>
        <td width="50%">ชื่ออุปกรณ์</td>
        <td width="20%">จำนวนครั้งที่แจ้งซ่อม</td>
    </tr>
    <?php if($totalRows_device >0){ do { ?>
        <tr>
            <td align="center"><?php echo $row_device['de_id']; ?></td>
            <td><?php echo $row_device['de_name']; ?></td>
            <td align="center">
                <?php
                $der_id = $row_device['der_id'];
                $count = "SELECT COUNT(ref_de_id) AS ccder FROM  tbl_case, tbl_device GROUP BY ref_de_id HAVING count(ref_de_id)>1" or die("Error:" . mysqli_error());

                $resultx = mysqli_query( $con,$count) or trigger_error(mysqli_error($con));
                $row = mysqli_fetch_array($resultx);
                echo $row['ccder'];
                ?>
                ครั้ง
            </td>
        </tr>
    <?php } while ($row_device = mysqli_fetch_assoc($device)); } ?>

</table>



//$query = "SELECT * FROM tbl_device ORDER BY de_id DESC" or die("Error:" . mysqli_error());
//$count = "SELECT COUNT(ref_de_id) AS count_de FROM  tbl_case GROUP BY  ref_de_id" or die("Error:" . mysqli_error());
//$row_device = mysqli_fetch_assoc($result);
//$totalRows_device = mysqli_num_rows($result);
//$result = mysqli_query($con, $query );
//$result2 = mysqli_query($con, $count );
//echo ' <table id="example1" class="table table-bordered table-striped">';
//echo "<thead>";
//echo "<tr class='warning'>
//      <th width='5%'>ID</th>
//      <th>อุปกรณ์</th>
//      <th width='10%'>จำนวน</th>
//    </tr>";
//echo "</thead>";
//while($row = mysqli_fetch_array($result, )) {
//    echo "<tr>";
//    echo "<td>" .$row["de_id"] .  "</td> ";
//    echo "<td>" .$row["de_name"] .  "</td> ";
//    echo "<td>" . $row["count_de"] . "</td> ";
//
//}
//while($row = mysqli_fetch_array($result2 )) {
////    echo "<td>" . $row["count_de"] . "</td> ";
//
//    echo "</tr>";
//}
//
//echo "</table>";
//mysqli_close($con);
//?>