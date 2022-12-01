<?php 
    session_start();
    
?>

<!DOCTYPE html>

<html lang="pl" dir="">
  <head>
    <meta charset="utf-8">
    <title>Dodaj przepis</title>
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
        <?php
                   if (isset($_SESSION["current_user"])){
                    echo '<h4>'.$_SESSION["current_user"].'</h4>';
                  }
        ?>

        <form method="POST" action="logic.php">
            <p class="ty">Tytuł:</p>
            <?php 
                if (isset($_SESSION["current_user"])){
                    echo '<input type="text" name="title" class="tytul" required>';
                } else {
                    echo '<input type="text" name="title" class="tytul" disabled required>';
                } 
            ?>
            <p class="ty">Treść:</p>
            <?php 
                if (isset($_SESSION["current_user"])){
                    echo '<textarea name="content" id="" cols="50" rows="50" required></textarea><br>';
                } else {
                    echo ' <textarea name="content" id="" cols="50" rows="50" disabled required></textarea><br>';
                } 
            ?>
            <?php 
                    if (isset($_SESSION["current_user"])){
                    echo '<input type="submit" value="WYŚLIJ" style="font-size: 30px;">';
                    } else {
                    echo '<br><h1 style="color:red; font-size: 30px;">Musisz być zalogowany aby dodać post.</h1>';
                    } 
            ?>
        </form>        
    </div>

    </div>
<script>
    //Hamburger menu
    const toggleButton = document.getElementById('toggle-button');
    const naviList = document.getElementById('navi-list');

    toggleButton.addEventListener('click', () => {
    naviList.classList.toggle('active');
    })   
</script>    
</body>
</html>