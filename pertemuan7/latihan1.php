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
// Variable scope / lingkup variabel
$x = 10; // variabel lokal untuk halaman
function tampilX() {
    $x = 20; // variabel lokal untuk function ini saja
    global $x; // mencari variabel yang berada diluar function
    echo $x;
}
tampilX();
echo "<br>";
echo $x;

// -----------------------------------------------------------------------

// Superglobal Variabel PHP 
// semuanya meupakan array assosiative
// $_GET  // datanya akan dikirim melalui url dan ditangkap variabel superglobalnya
// $_POST  // datanya akan dikirim melalui form dan ditangkap variabel superglobalnya
// $_REQUEST
// $_SESSION
// $_COOKIE
// $_SERVER
// $_ENV

// -----------------------------------------------------------------------

// $_GET
$mahasiswa = [
    [
    "nama" => "Indra Wahyudi", 
    "nrp" => "203040126", 
    "jurusan" => "Teknik Informatika", 
    "email" => "mindraw595@gmail.com",
    "gambar" => "1.png"
    ],
    [
    "nama" => "Kalam Mahardika", 
    "nrp" => "203040120", 
    "jurusan" => "Teknik Informatika", 
    "email" => "kalam@gmail.com",
    "gambar" => "1.png"
    ],
    [
    "nama" => "Akbar Maulana", 
    "nrp" => "203040116", 
    "jurusan" => "Teknik Informatika", 
    "email" => "akbar@gmail.com",
    "gambar" => "1.png"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
        <ul>
        <?php foreach ( $mahasiswa as $m) : ?>
                <li>Nama: <a href="latihan2.php?nama=<?= $m["nama"]?>&nrp=<?= $m["nrp"]?>&email=<?= $m["email"]?>&jurusan=<?= $m["jurusan"]?>&"><?= $m["nama"] ?></a></li>
        <?php endforeach; ?>
        </ul>
</body>
</html>