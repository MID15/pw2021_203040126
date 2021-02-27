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
            border: 3px solid black;
            padding: 10px;
        }
        .red {
            background-color: red;
            height: 30px;
            width: 30px;
            margin: 10px;
        }
        .blue {
            background-color: blue;
            height: 30px;
            width: 30px;
            margin: 10px;
        }
    </style>
</head>
<body>
<div class="container">
    <?php for ($i = 0; $i < 6; $i++) : ?>
        <div class="flex">
        <?php for ($j = 0; $j < 3; $j++) : ?>
            <?php if ($i %2 == 0) : ?>
                <div class="red"></div> <div class="blue"></div>
             <?php else : ?>
                <div class="blue"></div> <div class="red"></div> 
            <?php endif; ?>
        <?php endfor; ?>
        </div>
        <br>
    <?php endfor; ?>
    </div>
</body>
</html>