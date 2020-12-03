<!DOCTYPE html>
<html>
<head><title>LOGIN</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>  
body {font-family: Arial, Helvetica, sans-serif;}




input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}


button {

  background-color: #FBC842;
  color: #172644;
font-size: 1rem;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width:100%;
}
.container {
  
  padding: 16px;
}

button:hover {
  opacity: 0.8;

}
footer {
      display: table-row;
}
.footer__items{
      display: table-cell;
      vertical-align: top;
      padding-left: 500px;
      padding-top: 15px;
}
.footer__logo{
      display: table-cell;
      vertical-align: top;
      margin-left: 10px;
      margin-top: 10px;
}
</style>
</head>
<body>

<center>
<table>

<form name="ff" action=" " onsubmit="return validateForm()" method="post">
<tr><td>
<footer id="footer">
    <img class="footer__logo" src="../assets/img/Photo.svg" height="200" width="300">
    <div class="footer__items">
    <h1 style="font-size: 5rem; font-family: fantasy; color: #FBC842;">LOGIN</h1>
    </div>
  </footer></td>
</tr>
<tr>
 <td>
    <div class="container">
</td>
</tr>
<tr>
<td>
 <label for="uname"><b>Username</b></label>
<input type="text" id="uname" placeholder="Enter Username" name="uname" required>
 <label for="psw"><b>Password</b></label>
 <input type="password" id="psw" placeholder="Enter Password" name="psw"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"required>
 </td>
</tr>
<tr>
<td>
      <button type="submit" value="login" name="login">Login</button>
</td>

</tr>
 </div>
</table>
</center>
</form>
<script>


}
</script>
</body>
</html>


<?php  
  session_start();
include("dbConfig.php");    
if(isset($_POST['login']))  
{  
    $user_email=$_POST['uname'];  
    $user_pass=$_POST['psw'];  
  
    $check_user="select * from users WHERE userName='$user_email'AND password='$user_pass';";  
  
    $run=mysqli_query($db,$check_user);  
  
    if(mysqli_num_rows($run))  
    {  
        echo "<script>window.open('template_edit.php','_self')</script>";  
        $user_nameg=$user_email;
        $_SESSION['uname']=$user_email;//here session is used and value of $user_email store in $_SESSION.  
        
    }  
    else  
    {  
      echo "<script>alert('Email or password is incorrect!')</script>";  
    }  
}  
?>