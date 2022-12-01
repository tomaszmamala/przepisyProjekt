<?php 

   $dbhost = "localhost";
   $dbuser = "tomasz.mamala";
   $dbpass = "myfscpssql";
   $dbname = "tomasz.mamala";

    $dbconn = mysqli_connect($dbhost,$dbuser,$dbpass)
    or die ("Odpowiedź: Błąd połączenia z serwerem $host");
    mysqli_select_db($dbconn, $dbname) or die("Błąd! Nie można połączyć z bazą danych!");


    $user_fullname = mysqli_real_escape_string($dbconn, $_POST["name"]);
    $user_email = mysqli_real_escape_string($dbconn, $_POST["email"]);
    $user_password = mysqli_real_escape_string($dbconn, $_POST["password"]);
    $user_password_hash = password_hash($user_password, PASSWORD_DEFAULT);


    if (mysqli_query($dbconn, "INSERT INTO users (user_fullname, user_email, user_passwordhash) VALUES ('$user_fullname', '$user_email', '$user_password_hash')")){
        echo "Rejestracja przebiegła poprawnie";
        header('Location: logowanie.php');
     } else{
        echo "Nieoczekiwany błąd - użytkownik już istnieje lub błąd serwera MySQL.";
     }
?>