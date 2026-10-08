<?php
session_start();
if (!isset($_SESSION["admin"])) {
    header("Location: login.php");
    exit;
}

if (!isset($_SESSION["daftarWar"])) {
    $_SESSION["daftarWar"] = [];
}

$namaKonser = $_POST["namaKonser"];
$tanggal = $_POST["tanggal"];
$kategori = $_POST["kategori"];
$harga = $_POST["harga"];

$namaFile = $_FILES["gambarTiket"]["name"];
$tmpName = $_FILES["gambarTiket"]["tmp_name"];
$folderTujuan = "bukti_bayar/" . $namaFile;

if (move_uploaded_file($tmpName, $folderTujuan)) {

    $_SESSION["daftarWar"][] = [
        "nama" => $namaKonser,
        "tanggal" => $tanggal,
        "kategori" => $kategori,
        "harga" => $harga,
        "bukti" => $folderTujuan
    ];

    header("Location: dashboard.php");
    exit;
} else {
    echo "Gagal mengupload gambar tiket!";
    echo '<br><a href="tambahTiket.php">Kembali</a>';
}
?>