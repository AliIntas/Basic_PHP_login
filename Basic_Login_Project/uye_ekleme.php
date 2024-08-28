<html lang="tr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/bootstrap.css">
    <link rel="stylesheet" href="assets/style.css">
    <title>Site Başlığı</title>
</head>

<body>
    <div class="">
        <?php include 'header.php'; ?>
        <div class="row">
            <div class="col-md-3 mt-2">
                <?php include 'menu.php'; ?>
            </div>
            <div class="col-md-9 mt-2">
                <div class="content">
                    <h2>Üye ekleme</h2>

                    <form method="POST" action="uye_ekle.php">
                        <div class="nameAndPassword">
                            <input type="text" id="nameSurname" name="nameSurname" placeholder="Name Surname" class="form-control pb-2 mb-1 ">
                            <input type="email" id="email" name="email" placeholder="Email Address" class="form-control pb-2 mb-1 ">
                            <input type="password" id="password" name="password" placeholder="Password" class="form-control pb-2 mb-1 ">
                        </div>
                        <input type="submit" class="uyeEkle form-control" value="Uye ekle" name="submit">
                    </form>



                </div>
            </div>
        </div>

    </div>


</body>

</html>