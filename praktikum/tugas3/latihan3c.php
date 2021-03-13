<?php
    /*
    Nama    : Mochamad Indra Wahyudi
    NRP     : 203040126
    Shift   : Jum'at 13
    */
?>
<?php 
    $nama = [
        [
            "nama" => "Cristiano Ronaldo",
            "klub" => "Juventus"
        ],
        [
            "nama" => "Lionel Messi",
            "klub" => "Baecelona"
        ],
        [
            "nama" => "Luca Modric",
            "klub" => "Real Madrid"
        ],
        [
            "nama" => "Mohammad Salah",
            "klub" => "Liverpool"
        ],
        [
            "nama" => "Neymar Jr",
            "klub" => "Paris Saint Germain"
        ],
        [
            "nama" => "Sadio Mane",
            "klub" => "Liverpool"
        ],
        [
            "nama" => "Zlatan Ibrahimovic",
            "klub" => "Ac Milan"
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
    <style>
        .kotak {
            border: 2px solid black;
            width: 50%;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="kotak">
        <p style = "font-weight: bolder;">Daftar pemain bola terkenal dan clubnya</p>
            <table border="0" cellspacing="0" cellpadding="10">
                <?php foreach ($nama as $n) : ?>               
                        <td><?= $n["nama"];?></td>
                        <td>:</td>
                        <td><?= $n["klub"];?></td>
                        <tr></tr>
                <?php endforeach; ?>
           </table>
    </div>
</body>
</html>