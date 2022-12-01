<?php
    session_start();

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
    
    $sql = "SELECT * FROM data";
    $query = mysqli_query($dbconn, $sql);

    $title = $_REQUEST["title"];
    $content = $_REQUEST["content"];
    $uzytkownik = $_SESSION["current_user"];

    $sql = "INSERT INTO przepisy(tytul, kontent, uzytkownik) VALUES('$title', '$content', '$uzytkownik')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    header('Location: dodaj.php');

    $conn->close();
?>

