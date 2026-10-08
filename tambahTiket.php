<?php 
session_start(); 

if (!isset($_SESSION["admin"])) { 
  header("Location: login.php"); 
  exit; 
} 
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <title>Tambah Tiket</title>
</head>
<body>
    <h2>Tambah Tiket Baru</h2>
    <!-- Pastikan ada enctype untuk upload file -->
    <form action="prosesTambah.php" method="POST" enctype="multipart/form-data">
        <label>Nama Konser:</label><br>
        <input type="text" name="namaKonser" required><br><br>
        
        <label>Tanggal:</label><br>
        <input type="date" name="tanggal" required><br><br>
        
        <label>Kategori:</label><br>
        <input type="text" name="kategori" required><br><br>
        
        <label>Harga:</label><br>
        <input type="number" name="harga" required><br><br>
        
        <label>Upload Gambar/Banner:</label><br>
        <input type="file" name="gambarTiket" accept="image/*" required><br><br>
        
        <button type="submit">Simpan Tiket</button>
    </form>
    <br>
    <a href="dashboard.php">Kembali ke Dashboard</a>
</body>
</html>