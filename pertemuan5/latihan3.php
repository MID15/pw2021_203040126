<?php
    /*
    Mochamad Indra Wahyudi
    203040126
    github.com/MID15/pw2021_203040126
    Pertemuan 5 (11 Maret 2021)
    Materi minggu ini mempelajari mengenai array dalam PHP
    */
?>
<?php
$mahasiswa = [
    ["Indra Wahyudi", "203040126", "Teknik Informatika", "mindraw595@gmail.com"],
    ["Indra Wahyudi", "203040126", "Teknik Informatika", "mindraw595@gmail.com"],
    ["Indra Wahyudi", "203040126", "Teknik Informatika", "mindraw595@gmail.com"]
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
                <li>Nama: <?= $m[0] ?></li>
                <li>NRP: <?= $m[1] ?></li>
                <li>Jurusan: <?= $m[2] ?></li>
                <li>Email: <?= $m[3] ?></li>
            </ul>
        <?php endforeach; ?>
</body>
</html>