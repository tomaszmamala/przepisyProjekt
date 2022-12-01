<?php 
    session_start();
    $dbhost = "localhost";
    $dbuser = "tomasz.mamala";
    $dbpass = "myfscpssql";
    $dbname = "tomasz.mamala";
    
    $dbconn = mysqli_connect($dbhost,$dbuser,$dbpass)
    or die ("Odpowiedź: Błąd połączenia z serwerem $host");
    mysqli_select_db($dbconn, $dbname) or die("Błąd! Nie można połączyć z bazą danych!");


    $user_password = mysqli_real_escape_string($dbconn, $_POST["password"]);
    $user_email = mysqli_real_escape_string($dbconn, $_POST["email"]);

    $query_login = mysqli_query($dbconn, "SELECT * FROM users WHERE user_email ='$user_email'");
    $user_id = mysqli_query($dbconn, "SELECT * FROM users'");

        if(mysqli_num_rows($query_login) > 0) {
            $record = mysqli_fetch_assoc($query_login);
            $hash = $record["user_passwordhash"];

            if (password_verify($user_password, $hash)) {
                $_SESSION["current_user"] = $user_email;
                $_SESSION["current_id"] = $record["user_id"];;
        }
    }
    

    if (isset($_SESSION["current_user"])){
        echo $_SESSION["current_id"];
        header('Location: index.php');
        exit();
    } else {
        header('Location: logowanie.php');
        $_SESSION["blad"] = 1;
        echo "Nie zalogowano";
    }
    
    $dbconn->close();
?>