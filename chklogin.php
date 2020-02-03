<?php 
session_start();
        if(isset($_POST['m_username'])){
                  include("condb.php");
                  $m_username = $_POST['m_username'];
                  $m_password = sha1($_POST['m_password']);

                  $sql="SELECT * FROM tbl_member 
                  WHERE  m_username='".$m_username."' 
                  AND  m_password='".$m_password."' ";
                  $result = mysqli_query($con,$sql);
        
                  if(mysqli_num_rows($result)==1){
                      $row = mysqli_fetch_array($result);

                      $_SESSION["m_id"] = $row["m_id"];
                      //$_SESSION["m_name"] = $row["m_name"];
                      $_SESSION["m_level"] = $row["m_level"];

                      if($_SESSION["m_level"]=="admin"){

                        Header("Location: admin/");

                      }
                  if ($_SESSION["m_level"]=="member"){
 
                        Header("Location: member/");
 
                      }
                  if ($_SESSION["m_level"]=="technician"){
 
                        Header("Location: technician/");
 
                      }
                  if ($_SESSION["m_level"]=="manager"){
 
                        Header("Location: manager/");
 
                      }
 
                  }else{
                    echo "<script>";
                        echo "alert(\" Username หรือ  Password ไม่ถูกต้อง\");";
                        echo "window.history.back()";
                    echo "</script>";
 
                  }
 
        }else{
 
 
             Header("Location: index.php"); //user & password incorrect back to login again
 
        }
?>