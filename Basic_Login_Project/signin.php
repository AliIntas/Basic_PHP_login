<?php
session_start();
?>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/bootstrap.css">
    <link rel="stylesheet" href="assets/style.css">
    <title>Kayıt</title>
</head>

<body>
    <div class="anaEkran">
        <div class="girisEkrani mt-5">
            <h3 class="text pb-3">Kayıt</h3>
            <form method="POST" action="uye_ekle.php">
                <input type="text" id="nameSurname" name="nameSurname" placeholder="Name Surname" class="form-control pb-2 mb-1 ">
                <input type="email" id="email" name="email" placeholder="Email Address" class="form-control pb-2 mb-1 ">
                <input type="password" id="password" name="password" placeholder="Password" class="form-control pb-2 mb-1 ">
                <input type="submit" class="loginButton form-control mt-3" value="Kayıt ol" name="submit">
                <div class="giris_kayitButton mt-2">
                    <a href="login.php">Giriş yap</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>