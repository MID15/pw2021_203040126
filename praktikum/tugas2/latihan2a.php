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
        .style1 {
            border: 3px solid black;
            border-radius: 5px;
            box-shadow: 0 0 10px #000000;
        }
        .style2 {
            font-size: 28px;
            font-family: arial;
            color: #8c782d;
            font-style: italic;
            font-weight: bolder;
            margin: 10px;
        }
    </style>
</head>
<body>
<?php
    function gantiStyle ($tulisan, $style1 = "style1", $style2 = "style2") {
        return "<div class=$style1><p class=$style2>$tulisan</p></div>";
    }

    echo gantiStyle("Selamat datang di Praktikum PW")
?>

</body>
</html>