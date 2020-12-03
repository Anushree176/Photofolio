<?php
$title="Template";
$imgArr=["../assets/img/Template2/photographer.jpg","../assets/img/Template2/ocean.jpg","../assets/img/Template2/ocean2.jpg","../assets/img/Template2/falls2.jpg","../assets/img/Template2/mountainskies.jpg","../assets/img/Template2/mountains2.jpg"];
$img=array();
include_once '../dbConfig.php';
session_start();
// Get images from the database
if(basename(__FILE__, '.php')!="tem1")
{
    $una=basename(__FILE__, '.php');
    $title=basename(__FILE__, '.php');
}
else{
$una=$_SESSION['uname'];
}
$que = "SELECT * FROM page where userName='".$una."';";
$qu=mysqli_query($db,$que);
$r=mysqli_fetch_assoc($qu);
$pname=$r["pName"];
$bname=$r["bName"];
$query = "SELECT * FROM image where uname='".$una."' ORDER BY id DESC;";
$q=mysqli_query($db,$query);
if($q->num_rows > 0){
    while($row = $q->fetch_assoc()){
        $imageURL = $row["image"];
        array_push($img,$imageURL);}}
?>

<!DOCTYPE html>
<html lang="en">
<title><?php echo($title) ?></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body>

  <!-- Header -->
  
  <header class="w3-display-container w3-content w3-center" style="max-width:1500px max-height:500px">
    <img class="w3-image" src=<?php echo($img[0]) ?> alt="Me" width="1500" >
    <div class="w3-display-middle w3-padding-large w3-border w3-wide w3-text-grey w3-center">
      <h1 class="w3-hide-medium w3-hide-small w3-xxxlarge"><?php echo($bname) ?></h1>
      <h5 class="w3-hide-large" style="white-space:nowrap"><?php echo($bname) ?></h5>
      <h3 class="w3-hide-medium w3-hide-small"><?php echo($pname) ?></h3>
    </div>
    <div class="w3-bar w3-light-grey w3-round w3-display-topmiddle w3-hide-small" >
      <a href="#" class="w3-bar-item w3-button">Home</a>
      <a href="#portfolio" class="w3-bar-item w3-button">Portfolio</a>
      <a href="#contact" class="w3-bar-item w3-button">Contact</a>
    </div>
    <!-- Navbar (placed at the bottom of the header image) -->
    
  </header>

  <!-- Navbar on small screens -->
  <div class="w3-center w3-light-grey w3-padding-16 w3-hide-large w3-hide-medium">
    <div class="w3-bar w3-light-grey">
      <a href="#" class="w3-bar-item w3-button">Home</a>
      <a href="#portfolio" class="w3-bar-item w3-button">Portfolio</a>
      <a href="#contact" class="w3-bar-item w3-button">Contact</a>
    </div>
  </div>
  <!-- Page content -->
  <div class="w3-content w3-padding-large w3-margin-top" id="portfolio">

    <!-- Images (Portfolio) -->
    <?php
    for ($x = 1; $x < count($img); $x++) {
    ?>
    <img src=<?php echo($img[$x]) ?> alt="" class="w3-image w3-margin-top" width="1000" height="" onclick="onClick(this)">
    <?php
    }
    /*<img src=<?php echo($img[2]) ?> alt="Ocean II" class="w3-image w3-margin-top" width="1000" height="500" onclick="onClick(this)">
    <img src=<?php echo($img[3]) ?> alt="Falls" class="w3-image w3-margin-top" width="1000" height="500" onclick="onClick(this)">
    <img src=<?php echo($img[4]) ?> alt="Skies" class="w3-image w3-margin-top" width="1000" height="500" onclick="onClick(this)">
    <img src=<?php echo($img[5]) ?> alt="Mountains" class="w3-image w3-margin-top" width="1000" height="500" onclick="onClick(this)">
        */
    ?>

    <div id="modal01" class="w3-modal" onclick="this.style.display='none'">
      <img class="w3-modal-content" id="img01" style="width:650px; margin-left:350px;">
    </div>

    <!-- Contact -->
    <div class="w3-light-grey w3-padding-large w3-padding-32 w3-margin-top" id="contact">
      <h3 class="w3-center">Contact</h3>
      <hr>
      <form action="/action_page.php" target="_blank">
        <div class="w3-section">
          <label>Name</label>
          <input class="w3-input w3-border" type="text" required name="Name">
        </div>
        <div class="w3-section">
          <label>Email</label>
          <input class="w3-input w3-border" type="text" required name="Email">
        </div>
        <div class="w3-section">
          <label>Message</label>
          <input class="w3-input w3-border" required name="Message">
        </div>
        <button type="submit" class="w3-button w3-block w3-dark-grey">Send</button>
      </form><br>
      <p>Powered by <a href="../index1.php" target="_blank"
          class="w3-hover-text-green">PHOTOFOLIO</a></p>

    </div>

    <!-- End page content -->
  </div>
  <script>
    function onClick(element) {
      document.getElementById("img01").src = element.src;
      document.getElementById("modal01").style.display = "block";
    }
  </script>

</body>

</html>