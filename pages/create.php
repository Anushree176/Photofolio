<?php
session_start();
if(isset($_POST['submit'])){

if($_POST['dept']=="tem1")
{
    echo copy("C:/xampp/htdocs/Photofolio/pages/uploads/tem1.php","C:/xampp/htdocs/Photofolio/pages/portfolio/".$_SESSION['uname'].".php");
    echo"<script> window.close();</script> ";
    
    echo"<script>window.open('template_edit.php','_self')</script>";
}
elseif($_POST['dept']=="tem2")
{
  echo copy("C:/xampp/htdocs/Photofolio/pages/uploads/tem2.php","C:/xampp/htdocs/Photofolio/pages/portfolio/".$_SESSION['uname'].".php");
 
  echo"<script>window.open('template_edit.php','_self')</script>";
  
}
 
}
else
{
    echo "ille";
}
?>