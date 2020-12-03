<!DOCTYPE html>
<html lang="en">
<head>
  <title>Choose your template</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <style>
  .tab{
   list-style-type: none;
   margin: 0;
   padding: 0;
   overflow: hidden;
   background-color: #172644;
  }
  .tablink{
   float:left;
   margin-left: 30px;
   background-color: #172644;
   border: #172644;
  }
  .tablink a {
   display: block;
   text-color: rgb(202, 94, 94);
   text-align: center;
   padding: 14px 16px;
   text-decoration: none;
  }
  .tablink a:hover {
   background-color: #FBC842;
   color: #172644;
  }
  .tablink a.active {
   background-color: #c49102;
   color: #172644;
  }
 </style>
 </head>
<body>

<div class=" text-center" style="margin-bottom: -20px;">
  <h2>Choose your template</h2><br>
</div>
<div class="tab">
<form name="select" action="" method="post" enctype="multipart/form-data">
 <button class="tablink" onclick="getTemp(event, 'London')"><a style="color:rgb(255, 255, 255);" href="uploads/tem1.php" target="f2">Template 1</a></button>
 <button class="tablink" onclick="getTemp(event, 'London')"><a style="color:rgb(255, 255, 255);" href="uploads/tem2.php" target="f2">Template 2</a></button>
 <div class="text-right" style="margin-top: 10px;">
   <select name="dept" id="dept" required>
  <option value="tem1">Template 1</option>
  <option value="tem2">Template 2</option></select>
<button class=" " onclick="" style="background-color: #172644;border: #172644;" name="submit" style="color:rgb(255 , 255, 255);">
<!--<a href="create.php" style="color:rgb(255 , 255, 255);" target="_top">-->
Select</a>
</button>
</form>
</div>


</div>



<!--<div id="temp1" class="tabcontent">
  
</div>

<div id="temp2" class="tabcontent">

</div>
<script>
 function getTemp(evt, template) {
  // Declare all variables
  var i, tabcontent, tablinks;

  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
} 
</script>-->
</body>
</html>

<?php  
session_start();
if(isset($_POST['submit'])){

if($_POST['dept']=="tem1")
{
    echo copy("C:/xampp/htdocs/Photofolio/pages/uploads/tem1.php","C:/xampp/htdocs/Photofolio/pages/portfolio/".$_SESSION['uname'].".php");
    echo"<script> window.close();</script> ";
    
    echo"<script>window.open('template_edit.php','_top')</script>";
}
elseif($_POST['dept']=="tem2")
{
  echo copy("C:/xampp/htdocs/Photofolio/pages/uploads/tem2.php","C:/xampp/htdocs/Photofolio/pages/portfolio/".$_SESSION['uname'].".php");
  
  echo"<script>window.open('template_edit.php','_top')</script>";
  
}
 
}
?>