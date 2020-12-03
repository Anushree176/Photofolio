<!DOCTYPE html>
<html lang="en-US">
<head>
<title></title>
<meta charset="utf-8">
<style type="text/css">
.gallery img{
    width: 200;
    height: auto;
    border-radius: 5px;
    cursor :pointer;
    transition: .3s;
    margin: 5px;
}
</style>
</head>
<body>
<div class="container">
<?php
// Include the database configuration file
include_once 'dbConfig.php';
session_start();
// Get images from the database
$query = "SELECT * FROM image where uname='".$_SESSION['uname']."' ORDER BY id DESC;";
$q=mysqli_query($db,$query);
if($q->num_rows > 0){
    while($row = $q->fetch_assoc()){
        $imageURL = $row["image"];
?>
    <img src="<?php echo $imageURL; ?>" alt="" width="200"><br>
<?php }
}else{ ?>
    <p>No image(s) found...</p>
<?php } ?>
</div>
</body>
</html>