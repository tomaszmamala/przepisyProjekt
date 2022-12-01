<?php 
    session_start();
?>

<!DOCTYPE html>

<html lang="pl" dir="">
<head>
    <meta charset="utf-8">
    <title>Przepisy</title>
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
               $servername = "localhost";
               $username = "tomasz.mamala";
               $password = "myfscpssql";
               $dbname = "tomasz.mamala";
               
           
               // Create connection
               $dbconn = new mysqli($servername, $username, $password, $dbname);
               // Check connection
               if ($dbconn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
               }
                $sql = "SELECT * FROM przepisy";
                $query = mysqli_query($dbconn, $sql);

                if (is_array($query) || is_object($query)){
                    foreach($query as $q){?>
                            <div class="przepis">
                              <h2><?php echo $q['tytul']?></h2>   
                              <h4><?php echo $q['uzytkownik']?></h4>
                              <div class="kreska"></div>
                              <div class="guziki">     
                              <a href="view.php?id=<?php echo $q['id']?>"><button>Pokaż więcej</button></a>
                              
                                <?php 
                                  if (isset($_SESSION["current_user"])){
                                    if($_SESSION["current_user"] == $q['uzytkownik'] || $_SESSION["current_user"] == "admin@admin.pl"){
                                      ?>
                                        <form method="POST" action="usun.php">
                                          <input type="text" hidden name="id" value="<?php echo $q["id"];?>">
                                          <input type="submit" name="delete" value="USUŃ">
                                        </form>  
                                      <?php
                                    }
                                  } 
                                ?>
                              </div>
                            </div>  
                      
                <?php }} $dbconn->close();?>
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

