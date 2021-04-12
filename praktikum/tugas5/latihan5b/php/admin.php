<?php
// Melakukan koneksi ke database
require 'functions.php';

// Melakukan Query dari database
$buku = query("SELECT * FROM buku");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <title>Document</title>

  <style>
    img {
      height: 150px;
    }

    table {
      text-align: center;
    }

    .opsi {
      width: 200px;
    }

    .add button {
      margin: 10px 0 10px 0;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="add">
      <a href="tambah.php"><button class="btn btn-outline-primary btn-sm">Tambah Data</button></a>
    </div>
    <table class="table table-striped table-bordered align-middle">
      <tr>
        <th>#</th>
        <th>Opsi</th>
        <th>Cover</th>
        <th>Judul</th>
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>Tahun Terbit</th>
        <th>Genre</th>
      </tr>

      <?php $i = 1; ?>
      <?php foreach ($buku as $b) : ?>
        <tr>
          <td><?= $i; ?></td>
          <td class="opsi">
            <a href=""><button class="btn btn-outline-primary btn-sm">Ubah</button></a>
            <a href=""><button class="btn btn-outline-primary btn-sm">Hapus</button></a>
          </td>
          <td><img src="../assets/img/<?= $b['gambar']; ?>" alt=""></td>
          <td><?= $b['judul']; ?></td>
          <td><?= $b['penulis']; ?></td>
          <td><?= $b['penerbit']; ?></td>
          <td><?= $b['tahun terbit']; ?></td>
          <td><?= $b['genre']; ?></td>
        </tr>
        <?php $i++ ?>
      <?php endforeach; ?>
    </table>
  </div>
</body>

</html>