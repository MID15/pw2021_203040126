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
    <?php for( $i = 1; $i <= 3; $i++ ) : ?>
        <?php for( $j = 1; $j <= $i; $j++ ) : ?>
            <div class="row"><?= $i ?></div>
        <?php endfor; ?>
        <br>
    <?php endfor; ?>
</body>
</html>