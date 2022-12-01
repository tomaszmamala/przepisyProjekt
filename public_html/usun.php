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
    
    if(isset($_REQUEST['delete'])){
        $id = $_REQUEST['id'];
        echo $id;
        $sql = "DELETE FROM przepisy WHERE id = $id";
        $query = mysqli_query($conn, $sql);
        header("Location: przepisy.php");
    }

    $conn->close();
?>

