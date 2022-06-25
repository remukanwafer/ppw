<?php
    session_start();
    if($_SESSION['status_login'] != true){
        echo '<script>window.location="login.php"</script>';
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="assets/Logo_NIKE 1.png" type="image/x-icon">
    <title>Landing Page Praktikum Pemrograman WEB</title>
</head>
<body>
    <section>
        <header>
            <img src="assets/Logo_NIKE 1.png" alt="LogoNike" width="6%">
            <ul class="nav">
                <li><a href="#">Men</a></li>
                <li><a href="#">Women</a></li>
                <li><a href="#">Kids</a></li>
                <li><a href="#">Customize</a></li>
                <li><a href="#">Collection</a></li>
            </ul>
            <a href="logout.php" class="btn">LOGOUT</a>
        </header>
        <!-- Main -->
        <div class="main">
            <div class="main-img">
                <img src="assets/Group 3.png" alt="gambarSepatu">
            </div>
            <div class="main-content">
                <h1 class="main-content-h1">Nike</h1>
                <h2 class="main-content-h2">Super Fly 2008</h2>
                <p class="main-content-p">
                    Shoe have a comfortable upper and flexible midsole for multi-movement. A lower heel drops puuts you closer to the ground to  push pff and pivot. Training shoes are lightweight for easey and efficient movement
                </p>
                <div class="main-price">
                    <h3>$249,99</h3>
                </div>
                <a onclick="addcart()" href="#" class="btn">ADD TO CART</a>
            </div>
        </div>
    </section>
    <script>
        function addcart() {
            window.alert("Barang Berhasil Masuk Keranjang : ) ");
        }
    </script>
</body>
</html>