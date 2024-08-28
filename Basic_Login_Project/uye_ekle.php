<?php
session_start();

if (isset($_POST['submit'])) {
    $nameSurname = $_POST['nameSurname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    
    $file = fopen("assets/users.txt", "a"); 
    $data = "Ad Soyad: $nameSurname, Email: $email, Şifre: $password\n";
    fwrite($file, $data);
    fclose($file);

    
    $_SESSION['username'] = $nameSurname;
    $_SESSION['email'] = $email;

    header("Location: login.php");
    exit();
}
?>