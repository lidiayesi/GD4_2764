<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TiketWar</title>
</head>
<body>
    <?php
    $daftarKonser = [ 
    [ 
      "nama" => "Coldplay - Music of the Spheres", 
      "tanggal" => "2026-03-15", 
      "kategori" => "Festival", 
      "harga" => 1500000 
    ], 
    [ 
      "nama" => "Dewa 19 Reunion Show", 
      "tanggal" => "2026-04-02", 
      "kategori" => "VIP", 
      "harga" => 2500000 
    ], 
    [ 
      "nama" => "NCT Dream World Tour", 
      "tanggal" => "2026-05-20", 
      "kategori" => "Reguler", 
      "harga" => 900000 
    ], 
  ];

    echo "Selamat datang di TiketWar - war tiket konser paling josjis se-world!"; 
    ?>

    <h2>Daftar Konser War Tiket Minggu Ini</h2> 
    
    <?php foreach ($daftarKonser as $konser) { ?> 
    <div style="border: 1px solid #ccc; padding: 12px; margin-bottom: 8px;"> 
        <h3><?php echo $konser["nama"]; ?></h3> 
        <p>Tanggal: <?php echo $konser["tanggal"]; ?></p> 
        <p>Kategori: <?php echo $konser["kategori"]; ?></p> 
        <p>Harga: Rp<?php echo number_format($konser["harga"], 0, ",", "."); ?></p> 
    </div> 
    <?php } ?>
    
</body>
</html>