<?php
    /*
    Nama    : Mochamad Indra Wahyudi
    NRP     : 203040126
    Shift   : Jum'at 13
    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .jawaban {
            border: 2px solid black;
            padding: 10px;
        }
    </style>
</head>
<body>
<?php 
    $jawabanIsset = "Isset adalah = Fungsi untuk memeriksa apakah sebuah variable sudah dibuat atau belum <br><br>";
    $jawabanEmpty = "Empty adalah = Fungsi untuk memeriksa apakah sebuah variable sudah diisikan oleh nilai tertentu";

    function soal ($style) {
        global $jawabanIsset, $jawabanEmpty;
        echo "<div class=$style>$jawabanIsset $jawabanEmpty</div>";
    }
    echo soal("jawaban");
?>
</body>
</html>
