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
    <script src="https://kit.fontawesome.com/fe7eeb5356.js" crossorigin="anonymous"></script>

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
                  <li><a href="templates.php">TEMPLATES</a></li>
                  <li><a href="#">CONTACT US</a></li>
                  
                </ul>
              </div>
            </nav>
          </header>
        </div>
        <footer id="footer">
        <h1 style="text-align: center; font-size: 6rem;">Contact Us</h1>
        <br>
        <img class="footer__logo" src="../assets/img/SocialMedia1.svg" height="200" width="300">
        </footer>
        <div class="smi" style="padding: 72px;">
            <a class="smi0"><i class="fab fa-google fa-7x"></i></a>
            <a class="smi1"><i class="fab fa-facebook fa-7x"></i></a>
            <a class="smi2"><i class="fab fa-instagram fa-7x"></i></a>
            <a class="smi3"><i class="fab fa-github fa-7x"></i></a>
            <a class="smi4"><i class="fab fa-linkedin fa-7x"></i></a>
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
