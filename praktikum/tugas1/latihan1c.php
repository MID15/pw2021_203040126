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
        .container {
            border: 5px solid black;
            width: 120px;
        }
        .flex {
            display: flex;
        }
        p {
            text-align: center;
            width: 20px;
            height: 20px;
            background-color: orange;
            border: 3px solid black;
            margin: 5px;
            border-radius: 50%;
        }
    </style>
</head>
<body>
<div class="container">
        <?php for ($i = 1; $i <= 3; $i++) : ?>
            <div class="flex">
            <?php for ($j = 1; $j <= $i; $j++) : ?>
            <p><?= $i; ?></p>
            <?php endfor; ?>
            </div>
            <br>
        <?php endfor; ?>
</div>
</body>
</html>