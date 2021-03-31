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
        "picture" => "legion.png",
        "name" => "Lenovo Legion 5",
        "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo soluta dolorem recusandae, quisquam nobis molestiae.",
        "price" => "Rp 19.500.000",
        "category" => "Gaming Laptop"
    ],
    [
        "picture" => "flow.png",
        "name" => "Asus ROG Flow X13",
        "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo soluta dolorem recusandae, quisquam nobis molestiae.",
        "price" => "Rp 50.000.000",
        "category" => "2-in-1 Gaming Laptop"
    ],
    [
        "picture" => "zenbook.png",
        "name" => "Asus Zenbook 14 UX425",
        "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo soluta dolorem recusandae, quisquam nobis molestiae.",
        "price" => "Rp 17.000.000",
        "category" => "Ultrabook"
    ],
    [
        "picture" => "flex.png",
        "name" => "Lenovo Ideapad Flex 5",
        "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo soluta dolorem recusandae, quisquam nobis molestiae.",
        "price" => "Rp 13.000.000",
        "category" => "2-in-1 Laptop"
    ],
    [
        "picture" => "thinkcentre.jpg",
        "name" => "Lenovo AIO PC M802Z",
        "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo soluta dolorem recusandae, quisquam nobis molestiae.",
        "price" => "Rp 16.000.000",
        "category" => "AIO PC"
    ],
    [
        "picture" => "legion.png",
        "name" => "Lenovo Legion 5",
        "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo soluta dolorem recusandae, quisquam nobis molestiae.",
        "price" => "Rp 19.500.000",
        "category" => "Gaming Laptop"
    ],
    [
        "picture" => "flow.png",
        "name" => "Asus ROG Flow X13",
        "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo soluta dolorem recusandae, quisquam nobis molestiae.",
        "price" => "Rp 50.000.000",
        "category" => "2-in-1 Gaming Laptop"
    ],
    [
        "picture" => "zenbook.png",
        "name" => "Asus Zenbook 14 UX425",
        "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo soluta dolorem recusandae, quisquam nobis molestiae.",
        "price" => "Rp 17.000.000",
        "category" => "Ultrabook"
    ],
    [
        "picture" => "flex.png",
        "name" => "Lenovo Ideapad Flex 5",
        "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo soluta dolorem recusandae, quisquam nobis molestiae.",
        "price" => "Rp 13.000.000",
        "category" => "2-in-1 Laptop"
    ],
    [
        "picture" => "thinkcentre.jpg",
        "name" => "Lenovo AIO PC M802Z",
        "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo soluta dolorem recusandae, quisquam nobis molestiae.",
        "price" => "Rp 16.000.000",
        "category" => "AIO PC"
    ],
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
            width: 150px;
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
                    <th scope="col">picture</th>
                    <th scope="col">name</th>
                    <th scope="col">description</th>
                    <th scope="col">price</th>
                    <th scope="col">category</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($items as $item) : ?>
                    <tr>
                        <th><?= $i; ?></th>
                        <th><img src="img/<?= $item["picture"]; ?>" alt=""></th>
                        <th><?= $item["name"]; ?></th>
                        <th><?= $item["description"]; ?></th>
                        <th><?= $item["price"]; ?></th>
                        <th><?= $item["category"]; ?></th>
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