<?php
    /*
    Mochamad Indra Wahyudi
    203040126
    github.com/MID15/pw2021_203040126
    Pertemuan 7 (13 Maret 2021)
    Materi minggu ini mempelajari mengenai request method GET dan POST dalam PHP
    */
?>
<?php
// cek apakah tidak ada data di $_GET
if( !isset($_GET["nama"]) ||
    !isset($_GET["nrp"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["jurusan"]) ||) {
    // redirect
    header ("Location: latihan1.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <ul>
        <li><img src="img/1.png" alt=""></li>
        <li><?= $_GET["nama"];?></li>
        <li><?= $_GET["nrp"];?></li>
        <li><?= $_GET["email"];?></li>
        <li><?= $_GET["jurusan"];?></li>
    </ul>
<a href="latihan1.php">Kembali ke daftar mahasiswa</a>
</body>
</html>