<?php
session_start();
?>

<html lang="tr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/bootstrap.css">
    <link rel="stylesheet" href="assets/style.css">
    <title>İletişim</title>
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
                    <h2>İletişim:</h2>
                    <p>Ad: <?php echo $_SESSION['username']; ?></p>
                    <p>Email: <?php echo $_SESSION['email']; ?></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>