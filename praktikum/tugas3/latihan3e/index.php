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
            "Picture" => "legion.png",
            "Name" => "Lenovo Legion 5",
            "Description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo soluta dolorem recusandae, quisquam nobis molestiae.",
            "Price" => "Rp 19.500.000",
            "Category" => "Gaming Laptop"
        ],
        [
            "Picture" => "flow.png",
            "Name" => "Asus ROG Flow X13",
            "Description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo soluta dolorem recusandae, quisquam nobis molestiae.",
            "Price" => "Rp 50.000.000",
            "Category" => "2-in-1 Gaming Laptop"
        ],
        [
            "Picture" => "zenbook.png",
            "Name" => "Asus Zenbook 14 UX425",
            "Description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo soluta dolorem recusandae, quisquam nobis molestiae.",
            "Price" => "Rp 17.000.000",
            "Category" => "Ultrabook"
        ],
        [
            "Picture" => "flex.png",
            "Name" => "Lenovo Ideapad Flex 5",
            "Description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo soluta dolorem recusandae, quisquam nobis molestiae.",
            "Price" => "Rp 13.000.000",
            "Category" => "2-in-1 Laptop"
        ],
        [
            "Picture" => "thinkcentre.jpg",
            "Name" => "Lenovo AIO PC M802Z",
            "Description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo soluta dolorem recusandae, quisquam nobis molestiae.",
            "Price" => "Rp 16.000.000",
            "Category" => "AIO PC"
        ],
        [
            "Picture" => "legion.png",
            "Name" => "Lenovo Legion 5",
            "Description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo soluta dolorem recusandae, quisquam nobis molestiae.",
            "Price" => "Rp 19.500.000",
            "Category" => "Gaming Laptop"
        ],
        [
            "Picture" => "flow.png",
            "Name" => "Asus ROG Flow X13",
            "Description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo soluta dolorem recusandae, quisquam nobis molestiae.",
            "Price" => "Rp 50.000.000",
            "Category" => "2-in-1 Gaming Laptop"
        ],
        [
            "Picture" => "zenbook.png",
            "Name" => "Asus Zenbook 14 UX425",
            "Description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo soluta dolorem recusandae, quisquam nobis molestiae.",
            "Price" => "Rp 17.000.000",
            "Category" => "Ultrabook"
        ],
        [
            "Picture" => "flex.png",
            "Name" => "Lenovo Ideapad Flex 5",
            "Description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo soluta dolorem recusandae, quisquam nobis molestiae.",
            "Price" => "Rp 13.000.000",
            "Category" => "2-in-1 Laptop"
        ],
        [
            "Picture" => "thinkcentre.jpg",
            "Name" => "Lenovo AIO PC M802Z",
            "Description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo soluta dolorem recusandae, quisquam nobis molestiae.",
            "Price" => "Rp 16.000.000",
            "Category" => "AIO PC"
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
                <th scope="col">Picture</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th scope="col">Category</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($items as $item): ?>
                    <tr>
                        <th><?= $i; ?></th>
                        <th><img src="img/<?= $item["Picture"]; ?>" alt=""></th>
                        <th><?= $item["Name"]; ?></th>
                        <th><?= $item["Description"]; ?></th>
                        <th><?= $item["Price"]; ?></th>
                        <th><?= $item["Category"]; ?></th>
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