<?php
    /*
    Mochamad Indra Wahyudi
    203040126
    github.com/MID15/pw2021_203040126
    Pertemuan 4 (1 Maret 2021)
    Materi minggu ini mempelajari mengenai function dalam PHP
    */
?>
<?php
    function salam($waktu, $nama) {
        return "Selamat $waktu, $nama";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>
<body>
    <h1><?php echo salam("Pagi", "Indra");?></h1>
</body>
</html>