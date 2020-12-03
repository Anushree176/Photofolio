<?php
//User session in ['user']
session_start();
if($_SESSION['uname']){
  
  session_unset();
  session_destroy();
  session_write_close();
  setcookie(session_name(),'',0,'/');
  session_regenerate_id(true);
  echo"<script>window.open('../index1.php','_self')</script>";
}
?>
