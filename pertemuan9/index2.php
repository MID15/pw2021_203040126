<?php
/*
    Mochamad Indra Wahyudi
    203040126
    github.com/MID15/pw2021_203040126
    Pertemuan 9 (29 Maret 2021)
    Materi minggu ini mempelajari mengenai PHP dan MySQL
*/
?>
<?php
// Koneksi ke database
require 'functions.php';
$buku = query("SELECT * FROM buku");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img {
            height: 100px;
        }
    </style>
</head>

<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Gambar</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Bahasa</th>
            <th>Tahun Terbit</th>
            <th>Genre</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($buku as $row) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><img src="img/<?= $row["Gambar"]; ?>" alt=""></td>
                <td><?= $row["Judul"]; ?></td>
                <td><?= $row["Penulis"]; ?></td>
                <td><?= $row["Penerbit"]; ?></td>
                <td><?= $row["Bahasa"]; ?></td>
                <td><?= $row["Tahun Terbit"]; ?></td>
                <td><?= $row["Genre"]; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>

</html>