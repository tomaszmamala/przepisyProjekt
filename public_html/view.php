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
<div id="container">  
    
    <?php
        $servername = "localhost";
        $username = "tomasz.mamala";
        $password = "myfscpssql";
        $dbname = "tomasz.mamala";
    
    
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
     
        if(isset($_REQUEST['id'])){
            $id = $_REQUEST['id'];
            $sql = "SELECT * from przepisy WHERE  id = $id";
            $query = mysqli_query($conn, $sql);
        }    
    ?>
    <div class="content" style="color: aliceblue;">
        <div id="gener">
            <?php foreach($query as $q) { ?>
                <div class="przepis">
                    <h2><?php echo $q['tytul']?></h2>     
                    <h4><?php echo $q['uzytkownik']?></h4>
                    <div class="kreska"></div>     
                    <div class="tresc-przep"><?php echo nl2br($q['kontent']);?></div>
                </div>
            <?php } ?>
        </div> 
    </div>
</div> 
</body>
</html>