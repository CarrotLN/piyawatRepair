<?php
$con= mysqli_connect("us-cdbr-iron-east-04.cleardb.net","b2b2a61ce15814","ed632b23","heroku_b6a18ce63faf858") or die("Error: " . mysqli_error($con));
mysqli_query($con, "SET NAMES 'utf8' ");
error_reporting( error_reporting() & ~E_NOTICE );
date_default_timezone_set('Asia/Bangkok');
?>