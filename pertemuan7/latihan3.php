<?php
    /*
    Mochamad Indra Wahyudi
    203040126
    github.com/MID15/pw2021_203040126
    Pertemuan 7 (13 Maret 2021)
    Materi minggu ini mempelajari mengenai request method GET dan POST dalam PHP
    */
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
<?php if (isset($_POST["submit"])):?>
    <h1>Selamat Datang <?= $_POST["nama"];?></h1>
<?php endif; ?>
    <form action="" method="post">
        Masukan Nama:
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">kirim</button>
    </form>
</body>
</html>