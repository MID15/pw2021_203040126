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
            "klub" => "Juventus",
            "main" => "100",
            "gol" => "76",
            "assist" => "30"
        ],
        [
            "nama" => "Lionel Messi",
            "klub" => "Baecelona",
            "main" => "120",
            "gol" => "80",
            "assist" => "12"
        ],
        [
            "nama" => "Luca Modric",
            "klub" => "Real Madrid",
            "main" => "87",
            "gol" => "12",
            "assist" => "48"
        ],
        [
            "nama" => "Mohammad Salah",
            "klub" => "Liverpool",
            "main" => "90",
            "gol" => "103",
            "assist" => "8"
        ],
        [
            "nama" => "Neymar Jr",
            "klub" => "Paris Saint Germain",
            "main" => "109",
            "gol" => "56",
            "assist" => "15"
        ],
        [
            "nama" => "Sadio Mane",
            "klub" => "Liverpool",
            "main" => "163",
            "gol" => "30",
            "assist" => "70"
        ],
        [
            "nama" => "Zlatan Ibrahimovic",
            "klub" => "Ac Milan",
            "main" => "100",
            "gol" => "10",
            "assist" => "12"
        ]
    ];
$total_main = 0;
$total_gol= 0;
$total_assist = 0;
foreach ($nama as $a => $value) {
    $total_main += $value['main'];
    $total_gol += $value['gol'];
    $total_assist += $value['assist'];
}
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
            /* width: 50%; */
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="kotak">
        <p style = "font-weight: bolder;">Daftar pemain bola terkenal dan clubnya</p>
            <table border="1" cellspacing="0" cellpadding="10">
                <td>NO</td>
                <td>NAMA</td>
                <td>CLUB</td>
                <td>MAIN</td>
                <td>GOAL</td>
                <td>ASSIST</td>
                <tr></tr>
                <?php  $i = 1; ?>    
                <?php foreach ($nama as $n) : ?>  
                        
                        <td><?= $i; ?></td>
                        <td><?= $n["nama"];?></td>
                        <td><?= $n["klub"];?></td>
                        <td><?= $n["main"];?></td>
                        <td><?= $n["gol"];?></td>
                        <td><?= $n["assist"];?></td>
                        <tr></tr>  
                        <?php $i++; ?>
                <?php endforeach; ?>
                <th>#</th>
                <th colspan="2">
                <center>Jumlah</center>
                </th>
                <th><?= $total_main ?></th>
                <th><?= $total_gol ?></th>
                <th><?= $total_assist ?></th>
                
           </table>
    </div>
</body>
</html>