<?php
    /*
    Mochamad Indra Wahyudi
    203040126
    github.com/MID15/pw2021_203040126
    Pertemuan 5 (12 Maret 2021)
    Materi minggu ini mempelajari mengenai array associative dalam PHP
    */
?>
<?php
// $mahasiswa = [
//     ["Indra Wahyudi", "203040126", "Teknik Informatika", "mindraw595@gmail.com"],
//     ["Indra Wahyudi", "203040126", "Teknik Informatika", "mindraw595@gmail.com"],
//     ["Indra Wahyudi", "203040126", "Teknik Informatika", "mindraw595@gmail.com"]
// ];

// Array Associative
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Indra Wahyudi", 
    "nrp" => "203040126", 
    "jurusan" => "Teknik Informatika", 
    "email" => "mindraw595@gmail.com",
    "gambar" => "1.png"
    ],
    [
        "nama" => "Indra Wahyudi", 
    "nrp" => "203040126", 
    "jurusan" => "Teknik Informatika", 
    "email" => "mindraw595@gmail.com",
    "gambar" => "1.png"
    ],
    [
        "nama" => "Indra Wahyudi", 
    "nrp" => "203040126", 
    "jurusan" => "Teknik Informatika", 
    "email" => "mindraw595@gmail.com",
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
        <?php foreach ( $mahasiswa as $m) : ?>
            <ul>
                <li>
                    <img src="img/<?= $m ["gambar"]; ?>" alt="">
                </li>
                <li>Nama: <?= $m["nama"] ?></li>
                <li>NRP: <?= $m["nrp"] ?></li>
                <li>Jurusan: <?= $m["jurusan"] ?></li>
                <li>Email: <?= $m["email"] ?></li>
            </ul>
        <?php endforeach; ?>
</body>
</html>
