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
        .row {
            background-color: salmon;
            width: 30px;
            height: 30px;
            line-height: 30px;
            margin-bottom: 5px;
            text-align: center;
            border: 3px solid black;
            border-radius: 50px;
            font-weight: bold;
            display: inline-block;
        }
    </style>
</head>
<body>
    <?php 
        function tumpukanBola ($jumlahTumpukan) {
            for($i = 1; $i <= $jumlahTumpukan; $i++){
                for($j = 1; $j <= $i; $j++){
                    echo "<div class=row>$i</div>";
                }
                echo "<br>";
            }
        }

        echo tumpukanBola(5);
    ?>
</body>
</html>