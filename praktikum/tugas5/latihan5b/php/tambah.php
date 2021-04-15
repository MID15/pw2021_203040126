<?php
require 'functions.php';

if (isset($_POST["tambah"])) {
  if (tambah($_POST) > 0) {
    echo "<script>
      alert('data berhasil ditambahkan');
      document.location.href = 'admin.php';
    </script>";
  } else {
    echo "error";
  }
}
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <title>Tambah</title>
</head>

<body>
  <form action="" method="POST">
    <ul>
      <li>
        <label>
          Judul
          <input type="text" name="judul">
        </label>
      </li>
      <li>
        <label>
          Penulis
          <input type="text" name="penulis">
        </label>
      </li>
      <li>
        <label>
          Penerbit
          <input type="text" name="penerbit">
        </label>
      </li>
      <li>
        <label>
          Tahun Terbit
          <input type="text" name="tahun">
        </label>
      </li>
      <li>
        <label>
          Genre
          <input type="text" name="genre">
        </label>
      </li>
      <br>
      <button type="submit" name="tambah" class="btn btn-primary btn-sm">Tambah Data!</button>
      <button type="submit" class="btn btn-primary btn-sm">
        <a href="admin.php" style="color: white; text-decoration: none;">Kembali</a>
      </button>
    </ul>



  </form>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>