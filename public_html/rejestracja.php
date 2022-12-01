<!DOCTYPE html>

<html lang="pl" dir="">
  <head>
    <meta charset="utf-8">
    <title>Tomasz Mamala - główna</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://kit.fontawesome.com/f097fbc1d2.js"></script>
    <script src="pace.js"></script>
    <link rel="stylesheet" type="text/css" href="bar.css">
    <link rel="icon" href="mini.png">



</head>
<body>
  <div class="container">
      <div id="navbar">
      <div>
            <a href="index.php">
              <img src="images/bread.png" alt="" class="logotyp">
            </a>
          </div>
          <ul class="nav-list" id="navi-list">
            <li>
              <a href="#">Jeden</a>
            </li>
            <li>
              <a href="#">Dwa</a>
            </li>
            <li>
              <a href="#">Trzy</a>
            </li>
            <li>
              <a href="logowanie.php">Zaloguj</a>
            </li>
            <li>
              <a href="rejestracja.php">Rejestracja</a>
            </li>
          </ul>
          <div class="burger" id="toggle-button">
            <div class="burger-line"></div>
            <div class="burger-line"></div>
            <div class="burger-line"></div>
          </div>
  </div>  

  <div id="header">
    <p class="name1"> Strona startowa </p>
        
  </div>
      
  <div class="content" style="color: aliceblue;">CONTENT
    <form method="POST" action="register.php">
      <input type="text" name="name" placeholder="Imię i nazwisko" required>
      <input type="email" name="email" placeholder="E-mail" required>
      <input type="password" name="password" placeholder="Hasło" required>
      <input type="submit" name="submit" value="Wyślij">
   </form>
  </div>

  <div class="footer">

  </div>

  </div>
</body>
<script>
  // When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
  window.onscroll = function() {scrollFunction()};

  function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 120) {
  document.getElementById("navbar").style.borderBottom = "solid 2px #00f247";
  document.getElementById("header").style.backgroundPosition = "30% 30%";
      
        
  }else {
  document.getElementById("navbar").style.borderBottom = "solid 3px black";
  document.getElementById("header").style.backgroundPosition = "30% 1%";    
    }
  }

  //Hamburger menu
  const toggleButton = document.getElementById('toggle-button');
  const naviList = document.getElementById('navi-list');

  toggleButton.addEventListener('click', () => {
    naviList.classList.toggle('active');
  })
</script>
</html>