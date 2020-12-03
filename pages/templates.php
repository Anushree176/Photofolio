<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>PHOTOFOLIO</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
      crossorigin="anonymous"
    />

    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
      integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
      crossorigin="anonymous"
    />

    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
      integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
      crossorigin="anonymous"
    ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <link rel="stylesheet" href="../assets/css/styles_demo.css" />
    <script src="../assets/js/index.js"></script>

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
              <li><a href="../index.php">HOME</a></li>
              <li><a href="about.php">ABOUT</a></li>
              <li><a href="#">TEMPLATES</a></li>
              <li><a href="contact.php">CONTACT US</a></li>
              
            </ul>
          </div>
        </nav>
      </header>
      </div>
      <br>
      <h1 style="margin-left: 47rem; ">AWESOME TEMPLATES</h1>
      <div class="content">
        <div class="container mt-2">
          <div class="row">
            <div class="col-6 col-md-4 item">
              <div class="card item-card card-block">
                <h4 class="card-title text-right"></h4>
                <a href="../pages/Eleganter/index.html"><img
                  src="../assets/img/Templates/eleganter.jpg"
                  alt="Photo of sunset"
                /></a>
                <h5 class="item-card-title mt-3 mb-3">Eleganter</h5>
              </div>
            </div>
            <div class="col-6 col-md-4 item">
              <div class="card item-card card-block">
                <h4 class="item-card-title text-right"></h4>
                <a href="../pages/Girly/index.html"><img
                  src="../assets/img/Templates/girly.jpg"
                  alt="Photo of sunset"
                /></a>
                <h5 class="card-title mt-3 mb-3">Girly</h5>
              </div>
            </div>
            <div class="col-6 col-md-4 item">
              <div class="card item-card card-block">
                <h4 class="item-card-title text-right"></h4>
                <a href="../pages/Minimalista/index.html"><img
                  src="../assets/img/Templates/minimalista.jpg"
                  alt="Photo of sunset"
                /></a>
                <h5 class="card-title mt-3 mb-3">Minimalista</h5>
              </div>
            </div>
            
          </div>
          <div class="row">
            <div class="col-6 col-md-4 item">
              <div class="card item-card card-block">
                <h4 class="card-title text-right"></h4>
                <a href="../pages/Sentra/index.html"><img
                  src="../assets/img/Templates/sentra.jpg"
                  alt="Photo of sunset"
                /></a>
                <h5 class="item-card-title mt-3 mb-3">Sentra</h5>
              </div>
            </div>
            <div class="col-6 col-md-4 item">
              <div class="card item-card card-block">
                <h4 class="item-card-title text-right"></h4>
                <a href="../pages/Vanilla/index.html"><img
                  src="../assets/img/Templates/vanilla.jpg"
                  alt="Photo of sunset"
                /></a>
                <h5 class="card-title mt-3 mb-3">Vanilla</h5>
              </div>
            </div>
            <div class="col-6 col-md-4 item">
              <div class="card item-card card-block">
                <h4 class="item-card-title text-right"></h4>
                <a href="../pages/Wetwest/index.html"><img
                  src="../assets/img/Templates/wetwest.jpg"
                  alt="Photo of sunset"
                /></a>
                <h5 class="card-title mt-3 mb-3">Wet west</h5>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
<script>
  const buttonDark = document.getElementById('dark')
buttonDark.addEventListener('click', () => {
  if(buttonDark.innerText != 'Dark Mode'){
    buttonDark.innerText = "Dark Mode"
  }else{
    buttonDark.innerText = "Light Mode"
  }
      var button = document.querySelectorAll("button")
            button.forEach(item => {
                  item.classList.toggle('darkmode')
            })
      var large = document.querySelector('.large-wrapper') 
            large.classList.toggle('darkmode')
      var navBlack = document.querySelector('nav')
            navBlack.classList.toggle('darkmode')
      var navUlLi = document.querySelectorAll('nav ul li')
      navUlLi.forEach(item => {
            item.classList.toggle('darkmode')
      });var itemCardTitle = document.querySelectorAll('.item-card-title')
            itemCardTitle.forEach(item => {
            item.classList.toggle('darkmode')
            })
      
})
</script>
</body>

</html>
