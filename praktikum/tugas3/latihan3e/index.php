<?php
/*
    Nama    : Mochamad Indra Wahyudi
    NRP     : 203040126
    Shift   : Jum'at 13
    */
?>
<?php
$items = [
    [
        "gambar" => "hujan.png",
        "judul" => "Hujan",
        "penulis" => "Tere Liye",
        "penerbit" => "Gramedia Pustaka Utama",
        "tahun" => "Januari 2016",
        "genre" => "Science-Fiction"
    ],
    [
        "gambar" => "marmut.png",
        "judul" => "Marmut Merah Jambu",
        "penulis" => "Raditya Dika",
        "penerbit" => "Bukune",
        "tahun" => "Juni 2010",
        "genre" => "Comedy"
    ],
    [
        "gambar" => "omen.png",
        "judul" => "Omen",
        "penulis" => "Lexie Xu",
        "penerbit" => "Gramedia Pustaka Utama",
        "tahun" => "September 2012",
        "genre" => "Thriller, Romance"
    ],
    [
        "gambar" => "bumi.png",
        "judul" => "Bumi",
        "penulis" => "Tere Liye",
        "penerbit" => "Gramedia Pustaka Utama",
        "tahun" => "Januari 2014",
        "genre" => "Bildungsroman, Fiksi petualangan, Fantasi"
    ],
    [
        "gambar" => "buma.png",
        "judul" => "Bumi Manusia",
        "penulis" => "Pramoedya Ananta Toer",
        "penerbit" => "Hasta Mitra",
        "tahun" => "1980",
        "genre" => "Drama Histori"
    ]

]
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        img {
            height: 150px;
        }

        table {
            text-align: center;
        }

        table .genre {
            color: white;
            display: inline;
            padding: 2px;
            background-color: cadetblue;
            border-radius: 10px;
        }
    </style>

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Penulis/th>
                    <th scope="col">Penerbit</th>
                    <th scope="col">Tahun Terbit</th>
                    <th scope="col">Genre</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($items as $item) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><img src="img/<?= $item["gambar"]; ?>" alt=""></td>
                        <td><?= $item["judul"]; ?></td>
                        <td><?= $item["penulis"]; ?></td>
                        <td><?= $item["penerbit"]; ?></td>
                        <td><?= $item["tahun"]; ?></td>
                        <td>
                            <p class="genre"><?= $item["genre"]; ?></p>
                        </td>
                        <?php $i++; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

</body>

</html>