<?php
session_start();

// if user already login then run main.php
if (isset($_SESSION["username"])) {
    header("Location: main.php");
    exit();
}

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $dosyaYolu = "assets/users.txt";
    $dosya = fopen($dosyaYolu, "r");

    if ($dosya) {
        $girisBasarili = false;
        while (($satir = fgets($dosya)) !== false) {
            list($kullaniciadi, $email, $sifre) = explode(", ", trim($satir));
            $kullaniciadi = str_replace("Ad Soyad: ", "", $kullaniciadi);
            $email = str_replace("Email: ", "", $email);
            $sifre = str_replace("Şifre: ", "", $sifre);

            if ($kullaniciadi == $username && $password == $sifre) {
                $_SESSION["username"] = $username;
                $_SESSION['email'] = $email;
                header("Location: main.php");
                fclose($dosya);
                exit();
            }
        }
        fclose($dosya);
        echo "Kullanıcı adı veya şifre yanlış";
    } else {
        echo "Dosya açılamadı.";
    }
}
?>

<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/bootstrap.css">
    <link rel="stylesheet" href="assets/style.css">
    <title>Giriş</title>
</head>

<body>
    <div class="anaEkran">
        <div class="girisEkrani mt-5">
            <h3 class="text pb-3">Giriş</h3>
            <form method="POST" action="">
                <input type="text" id="username" name="username" placeholder="Email Address" class="form-control  pb-2 mb-1">
                <input type="password" id="password" name="password" placeholder="Password" class="form-control  pb-2 mb-1">
                <input type="submit" class="loginButton form-control mt-3" value="Giriş" name="submit">
                <div class="giris_kayitButton mt-2">
                    <a href="signin.php">Kayıt ol</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>