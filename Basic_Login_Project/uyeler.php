<?php
$dosyaYolu = "assets/users.txt";
$dosya = fopen($dosyaYolu, "r");

?>


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
                <h2>Kayıtlı Üyeler</h2>
                <?php
                if ($dosya) {
                    while (($satir = fgets($dosya)) !== false) {
                        echo nl2br($satir);
                    }
                    fclose($dosya);
                } else {
                    echo "Dosya açılamadı.";
                }
                ?>
            </div>
        </div>
    </div>
    </div>


</body>

</html>