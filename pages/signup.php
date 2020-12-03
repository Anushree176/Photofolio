<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sign Up</title>
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

button:hover {
  opacity: 0.8;
}
.container {
  padding: 16px;
}
#footer {
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
  <footer id="footer">
    <img class="footer__logo" src="../assets/img/Photo.svg" height="200" width="300">
    <div class="footer__items">
      <h1 style="font-size: 5rem; font-family: fantasy; color: #FBC842;">SIGN UP</h1>
    </div>
  </footer>
<center>  
<table>
<form name="ff" action=" " onsubmit="return validateForm()" method="post">
<tr>
 <td>
    <div class="container">
</td>
</tr>
<tr>
<td>
      <label for="fname"><b>Name:</b></label>
      <input type="text" id="fname" placeholder="Enter Name" name="fname" required>
     <label for="gender"><b>Gender:</b></label>
    <input type="radio" id="male"  name="gender" value="male" >
     <label for="male" "><b>Male</b></label>
      <input type="radio" id="female" name="gender" value="female">
     <label for="female" ><b>Female</b></label><br><br>
     <label for="mail"><b>Enter Your Email:</b></label>
    <input type="text" id="email" placeholder="Enter Email" name="mail" required>

     <label for="uname"><b>Username</b></label>
      <input type="text" id="uname" placeholder="Enter Username:" name="uname" required>
      <label for="psw"><b>Password</b></label>
      <input type="password" id="pass" placeholder="Enter Password:" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"required>
      <label for="Cpsw"><b>Confirm Password</b></label>
      <input type="password" id="Cpsw" placeholder="Enter Confirm Password:" name="Cpsw" required>
  </td>
</tr>
<tr>
<td>
      <button type="submit" value="register" name="register">Sign Up</button>
</td>

</tr>
 </div>
</table>
</center>
</form>
<script>
function validateForm(){
var y=document.ff.fname.value;
var regex_name=/^[a-zA-Z]+$/;   
var x=document.ff.email.value;
var regex_email=/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
var z=document.ff.Cpsw.value;
var w=document.ff.pass.value;
if(!y.match(regex_name)){
alert("Must input character string for name");
return false;} 
if(!x.match(regex_email)){
alert("Enter correct email!");
return false;} 
if(!z.match(w)){
alert("Password is not same");
return false;} 
}

</script>
</body>
</html>



<?php  
session_start();  
include("dbConfig.php");  
if(isset($_POST['register']))  
{  
    $user_name=$_POST['uname'];
    $name=$_POST['fname'];//here getting result from the post array after submitting the form.  
    $user_pass=$_POST['psw'];//same  
    $user_email=$_POST['mail'];
    $user_gender=$_POST['gender'];//same  
  
  
    if($user_name=='')  
    {  
        //javascript use for input checking  
        echo"<script>alert('Please enter the name')</script>";  
exit();//this use if first is not work then other will not show  
    }  
  
    if($user_pass=='')  
    {  
        echo"<script>alert('Please enter the password')</script>";  
exit();  
    }  
  
    if($user_email=='')  
    {  
        echo"<script>alert('Please enter the email')</script>";  
    exit();  
    }  
//here query check weather if user already registered so can't register again.  
    $check_email_query="select * from users WHERE email='$user_email';";  
    $run_query=mysqli_query($db,$check_email_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";  
exit();  
    }  

    $check_user_name="select * from users WHERE userName='$user_name';";  
    $run_query=mysqli_query($db,$check_user_name);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('User Name $user_name already exists in our database, Please try another one!')</script>";  
exit();  
    } 

//insert the user into the database.  
    $insert_user="insert into users (userName,name,email,password,gender) VALUE ('$user_name','$name','$user_email','$user_pass','$user_gender');";  
    if(mysqli_query($db,$insert_user))  
    {  
        
      $_SESSION['uname']=$user_name;

      
      echo"<script>window.open('template_info.php','_self')</script>";
        /*$create_table="CREATE TABLE `$user_name` (
          `id` int(11) NOT NULL AUTO_INCREMENT,
          `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
          `uploaded_on` datetime NOT NULL,
          `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
          PRIMARY KEY (`id`)
         ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";


         $create_table="CREATE TABLE `$user_name` (
          `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
          `name` varchar(200) NOT NULL,
          `image` longtext NOT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=latin1;";

          if (mysqli_query($db,$create_table)) {
            echo "Table MyGuests created successfully";
            echo"<script>window.open('template_info.php','_self')</script>";
            
            mkdir("../uploads/$user_name",0777);
          } else {
            echo "Error creating table: " . mysqli_error($db);
          }*/
    }
    else
    {
      echo "<script>alert('Email already exists in our database, Please try another one!')</script>";
    }  
} 
?>  