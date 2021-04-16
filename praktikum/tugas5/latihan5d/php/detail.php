<?php
// Mengecek apakah ada id yang dikirimkan
// jika tidak ada maka akan dikembalikan ke index.php
if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}

require "functions.php";

// Mengambil id dari url

$id = $_GET['id'];

// Melakukan query dengan parameter id yang diambil dari url
$buku = query("SELECT * FROM buku WHERE id = $id");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .container {
            border: 2px solid #333;
            padding: 6px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="gambar">
            <img src="../assets/img/<?= $buku["gambar"] ?>" alt="">
        </div>
        <div class="keterangan">
            <p><?= $buku["judul"] ?></p>
            <p><?= $buku["penulis"] ?></p>
            <p><?= $buku["penerbit"] ?></p>
            <p><?= $buku["tahun"] ?></p>
            <p><?= $buku["genre"] ?></p>
        </div>
        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
</body>

</html>