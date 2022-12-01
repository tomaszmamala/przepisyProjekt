<?php 
    session_start();
?>

<!DOCTYPE html>

<html lang="pl" dir="">
  <head>
    <meta charset="utf-8">
    <title>Logowanie</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://kit.fontawesome.com/f097fbc1d2.js"></script>
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
            <a href="przepisy.php">Przepisy</a>
            </li>
            <li>
            <a href="dodaj.php">Dodaj przepis</a>
            </li>
            <li>
            <a href="kontakt.php">Kontakt</a>
            </li>
            <li class="log">
            <?php 
                if (isset($_SESSION["current_user"])){
                echo '<a href="logout.php">Wyloguj</a>';
                } else {
                echo '<a href="logowanie.php">Zaloguj</a>';
                } 
            ?>
            </li>
            <li class="log2">
            <?php 
                if (isset($_SESSION["current_user"])){
                echo '<a href="logout.php">Wyloguj</a>';
                } else {
                echo '<a href="logowanie.php">Zaloguj</a>';
                } 
            ?>
            </li>
        </ul>
        <div class="burger" id="toggle-button">
            <div class="burger-line"></div>
            <div class="burger-line"></div>
            <div class="burger-line"></div>
        </div>
    </div> 



      
    <div class="content" style="color: aliceblue;">
      <div class="form-cont">
        <div class="formularze" >
          <h1>Zaloguj się!</h1>
          <form method="POST" action="login.php">
              <input type="email" class="input-log" name="email" placeholder="email" required><br>
              <input type="password" name="password" class="input-password" placeholder="Hasło" required><br>
              <input type="submit" name="submit" value="Wyślij"><br>

              <?php 
                if (isset($_SESSION["current_user"])){
                  echo "Witaj,  ";
                  echo $_SESSION["current_user"];
                  echo "!";
                  } else {
                      if (isset($_SESSION["blad"])) echo "<h5>Nie prawidłowe dane logowania.</h5>";
                  }  
                  unset($_SESSION["blad"]);
                ?>
                
          </form>
        </div>

        <div class="formularze">
        <h1>Zarejestruj się!</h1>
          <form method="POST" action="register.php">
              <input type="text" class="input-log" name="name" placeholder="Imię i nazwisko" required><br>
              <input type="email" class="input-log" name="email" placeholder="E-mail" required><br>
              <input type="password" name="password" class="input-password" placeholder="Hasło" required><br>
              <input type="submit" name="submit" value="Wyślij"><br>
          </form>
        </div>
        
      </div>
   

    </div>

  <!-- <div class="footer">

  </div> -->

  </div>
</body>
<script>

  //Hamburger menu
  const toggleButton = document.getElementById('toggle-button');
  const naviList = document.getElementById('navi-list');

  toggleButton.addEventListener('click', () => {
    naviList.classList.toggle('active');
  })
</script>
</html>