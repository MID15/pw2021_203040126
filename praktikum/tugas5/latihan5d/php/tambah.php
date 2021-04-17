<?php
require 'functions.php';

if (isset($_POST["tambah"])) {
  if (tambah($_POST) > 0) {
    echo "<script>
      alert('data berhasil ditambahkan');
      document.location.href = 'admin.php';
    </script>";
  } else {
    echo "<script>
          alert('data berhasil ditambahkan');
          document.location.href = 'admin.php';
        </script>";
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
  <style>
    form {
      padding: 10px;
    }
  </style>
</head>

<body>
  <h3>Form Tambah Data Buku</h3>
  <form action="" method="POST">
    <table border="0" cellpadding="10px">
      <tr>
        <td> <label> Judul </label></td>
        <td><input type="text" name="judul" required autofocus></td>
      </tr>
      <tr>
        <td> <label> Penulis </label></td>
        <td><input type="text" name="penulis" required></td>
      </tr>
      <tr>
        <td> <label> Penerbit </label></td>
        <td><input type="text" name="penerbit" required></td>
      </tr>
      <tr>
        <td> <label> Tahun Terbit </label></td>
        <td><input type="text" name="tahun" required></td>
      </tr>
      <tr>
        <td> <label> Genre </label></td>
        <td><input type="text" name="genre" required></td>
      </tr>
    </table>
    <button type="submit" name="tambah" class="btn btn-primary btn-sm">Tambah Data!</button>
    <button type="submit" class="btn btn-primary btn-sm">
      <a href="admin.php" style="color: white; text-decoration: none;">Kembali</a>
    </button>
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