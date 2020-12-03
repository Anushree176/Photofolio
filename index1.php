<!DOCTYPE html>
<html lang="pt-br">

<head>
 <meta charset="UTF-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <meta http-equiv="X-UA-Compatible" content="ie=edge" />
 <title>PHOTOFOLIO</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
  integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" />

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
  integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous" />

 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

 <link rel="stylesheet" href="assets/css/styles.css" />

 <script src="assets/js/index.js"></script>

</head>

<body>
 <div class="large-wrapper">
  <div class="wrapper">
   <header>
    <nav>
     <div class="menu-icon">
      <i class="fa fa-bars fa-2x"></i>
     </div>
     <div class="logo">PHOTOFOLIO</div>
     <div class="menu">
      <ul>
       <li><a href="#"><b>HOME</b></a></li>
       <li><a href="pages/about.php"><b>ABOUT</b></a></li>
       <li><a href="pages/templates.php"><b>TEMPLATES</b></a></li>
       <li><a href="pages/contact.php"><b>CONTACT US</b></a></li>
      </ul>
     </div>
    </nav>
   </header>
  </div>
  <div class="w3-content w3-section" style="height:900px">
   <div class="hero-content">
    <h1>PHOTOFOLIO</h1>
    <br>
    <button type="button" class="btn btn-outline-dark glow-button"
     onclick="window.scrollTo(0, document.body.scrollHeight);"> Get Started </button>
   </div>
   <img class="mySlides" src="assets/img/mainslider1.png" style="width:100%">
   <img class="mySlides" src="assets/img/mainslider2.png" style="width:100%">
   <img class="mySlides" src="assets/img/mainslider3.png" style="width:100%">
   <img class="mySlides" src="assets/img/1.png" style="width:100%">
   <img class="mySlides" src="assets/img/3.png" style="width:100%">
   <img class="mySlides" src="assets/img/5.png" style="width:100%">
  </div>
  <script>
  var myIndex = 0;
  carousel();

  function carousel() {
   var i;
   var x = document.getElementsByClassName("mySlides");
   for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
   }
   myIndex++;
   if (myIndex > x.length) { myIndex = 1 }
   x[myIndex - 1].style.display = "block";
   setTimeout(carousel, 3000); // Change image every 3 seconds
  }
  
 </script>

  <footer id="footer">
   <img class="footer__logo" src="assets/img/moments.svg" height="300" width="300">
   <div class="footer__items">
    <h2 style="font-family: cursive;"><i> “Photography is the story I fail to put into words.”</i><br></h2>
    <h3>– Destin Sparks</h3>
    <br>
    <h3>So let's build an amazing story together with elegant portfolios!</h3>
    <br><br>
    <a href="pages/login.php"><button type="button" class="btn btn-outline-dark func_btn">Log In</button></a>
    <a href="pages/signup.php"><button type="button" class="btn btn-outline-dark func_btn"
      style="margin-left: 30px;">Sign Up</button></a>
   </div>
  </footer>
 </div>

 <!--<script>
  var myIndex = 0;
  carousel();

  function carousel() {
   var i;
   var x = document.getElementsByClassName("mySlides");
   for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
   }
   myIndex++;
   if (myIndex > x.length) { myIndex = 1 }
   x[myIndex - 1].style.display = "block";
   setTimeout(carousel, 3000); // Change image every 3 seconds
  }
  
 </script>-->
</body>

</html>