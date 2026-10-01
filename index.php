<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TiketWar</title>
</head>
<body>
    <?php
    $namaKonser = "Coldplay - Music of the Spheres";
    $hargaTiket = 1500000;
    $sisaTiket = 50;
    $sudahSoldOut = false;
    $kategoriTiket = "VIP";
    $kategoriTiket = "Festival";
    echo "Selamat datang di TiketWar - war tiket konser paling josjis se-world!"; 
    ?>

    <p>Konser: <?php echo $namaKonser; ?></p> 
    <p>Harga: Rp<?php echo $hargaTiket; ?></p> 
    <p>Sisa tiket: <?php echo $sisaTiket; ?></p>
    <p>Kategori tiket: <?php echo $kategoriTiket; ?></p>
    
</body>
</html>