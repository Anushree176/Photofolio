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
                  <li><a href="#">ABOUT</a></li>
                  <li><a href="templates.php">TEMPLATES</a></li>
                  <li><a href="contact.php">CONTACT US</a></li>
                  
                </ul>
              </div>
            </nav>
          </header>
        </div>
        <footer id="footer">
        <h1 style="text-align: center; font-size: 6rem;">About Us</h1>
        <br>
        <img class="footer__logo" src="../assets/img/AboutUs.svg" height="200" width="300">
        <br><br>
        <p>We are <b>Photofolio</b> — a team of experts at the intersection of the tech and creative spaces. 
            We’re driven by a singular passion and purpose: to help photographers succeed and thrive.<br><br>
            We are passionate about finding new ways to provide the photography community the tools and resources 
            they need to share their work and grow their business. Our work is never done.</p>
        <br><br><br>
        <h1 style="text-align: center; font-size: 6rem;">Our Team</h1>
        <br><br>
        <div class="clearfix">
            <div class="img-container">
            <img src="../assets/img/FemaleAvatar.svg" alt="Anushree" height="100" width="300"><br><br>
            <p style="margin-left: 12rem;">Anushree P. Kolhe</p>
            </div>
            <div class="img-container">
            <img src="../assets/img/MaleAvatar.svg" alt="Rishabh" height="100" width="300"><br><br>
            <p style="margin-left: 12rem;">Rishabh J. Maurya</p>
            </div>
            <div class="img-container">
            <img src="../assets/img/FemaleAvatar.svg" alt="Sakshi" height="100" width="300"><br><br>
            <p style="margin-left: 12rem;">Sakshi N. Mahadik</p>
            <br><br><br>
            </div>
        </div>
        </footer>
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
