<?php 
    session_start();
?>

<!DOCTYPE html>

<html lang="pl" dir="">
  <head>
    <meta charset="utf-8">
    <title>Kontakt</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://kit.fontawesome.com/f097fbc1d2.js"></script>
    <script src="zegarek.js"></script>
    <link rel="stylesheet" type="text/css" href="bar.css">
    <link rel="icon" href="mini.png">
</head>
<body onload="startTime()">
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

    <div class="content">
        <div class="nad-kontakt">
            <div class="kontakt">
            <?php
                   if (isset($_SESSION["current_user"])){
                    echo "<h4>Witaj,  ";
                    echo $_SESSION["current_user"];
                    echo "!</h4>";
                  }
                  else{
                    echo "<h4>Witaj!</h4>";
                  }
              ?>
                POMOC TECHNICZNA: <br>
                email: przepisy@przepisy.pl <br>
                telefon: 808 808 808 <br>
                czynny w godzinach <b>10:00 - 18:00</b><br> <br>
                <div class="kreska"></div>
                <canvas id="canvas" width="150" height="150" onclick="red()"></canvas>
                <div id="czas"></div>

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
<script>
function startTime() {
  const today = new Date();
  let h = today.getHours();
  let m = today.getMinutes();
  m = checkTime(m);
  document.getElementById('czas').innerHTML =  "<b>" + h + ":" + m + "</b>";
  if(h > 10 && h < 18){
    document.getElementById('czas').style.color = "#3B9A64";
  }else{
    document.getElementById('czas').style.color = "red";
  }
  setTimeout(startTime, 1000);
}

function checkTime(i) {
  if (i < 10) {i = "0" + i};  // dodaje zero przed cyfry
  return i;
}
</script>
</html>