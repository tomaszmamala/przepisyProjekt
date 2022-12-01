<?php 
    session_start();
?>

<!DOCTYPE html>

<html lang="pl" dir="">
<head>
    <meta charset="utf-8">
    <title>Strona główna</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://kit.fontawesome.com/f097fbc1d2.js"></script>
    <link rel="stylesheet" type="text/css" href="bar.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
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

    <div id="header">
        <div class="slider">
            <div class="slider_container">
                <button class="slider_button slider_button-prev" data-button-prev><</button>
                <figure class="slide" data-slide></figure>
                <button class="slider_button slider_button-next" data-button-next>></button>
            </div> 
        </div>                   
    </div>
    <div class="content">
        <div class="skroty">
            <?php 
                if (isset($_SESSION["current_user"])){
                    echo '<a href="logout.php">';
                        } else {
                    echo '<a href="logowanie.php">';
                        } 
                    ?>
                <div class="skr">
                    <?php 
                        if (isset($_SESSION["current_user"])){
                        echo '<br>WYLOGUJ SIĘ<br><i class="fas fa-sign-out-alt"></i>';
                        } else {
                        echo '<br>ZALOGUJ SIĘ<br><i class="fas fa-sign-in-alt"></i>';
                        } 
                    ?>
                </div>
            </a>    
            <a href="dodaj.php">
                <div class="skr"><br>DODAJ PRZEPIS<br>
                    <img src="./images/add.png" alt="">
                </div>
            </a>    
            <a href="przepisy.php">
                <div class="skr"><br>PRZEGLĄDAJ PRZEPISY <br>
                    <img src="./images/list.png" alt="">
                </div>
            </a>    
        </div>
    </div>    
    
    <!-- <div class="footer">
        TOMASZ MAMALA©
    </div> -->

</div>

<script src="slide.js"></script>
<script>
    const imageArr = [
        'images/4.jpg',
        'images/1.jpg',
        'images/2.jpg',
        'images/3.jpg',
        'images/5.jpg',
    ];

    const slider = new Slider(imageArr);
    slider.initializeSlider();
</script>
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