<?php
require 'functions.php';

$id = $_GET['id'];
$b = query("SELECT * FROM buku WHERE id = $id");

if (isset($_POST["ubah"])) {
  if (ubah($_POST) > 0) {
    echo "<script>
      alert('data berhasil diubah');
      document.location.href = 'admin.php';
    </script>";
  } else {
    echo "<script>
      alert('error');
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

  <title>Form Ubah Data Buku</title>
</head>

<body>
  <h3>Form Ubah Data Buku</h3>
  <form action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $b['id']; ?>">
    <table border="0" cellpadding="10px">
      <tr>
        <td> <label> Judul </label></td>
        <td><input type="text" name="judul" required autofocus value="<?= $b['judul']; ?>"></td>
      </tr>
      <tr>
        <td> <label> Penulis </label></td>
        <td><input type="text" name="penulis" required value="<?= $b['penulis']; ?>"></td>
      </tr>
      <tr>
        <td> <label> Penerbit </label></td>
        <td><input type="text" name="penerbit" required value="<?= $b['penerbit']; ?>"></td>
      </tr>
      <tr>
        <td> <label> Tahun Terbit </label></td>
        <td><input type="text" name="tahun" required value="<?= $b['tahun']; ?>"></td>
      </tr>
      <tr>
        <td> <label> Genre </label></td>
        <td><input type="text" name="genre" required value="<?= $b['genre']; ?>"></td>
      </tr>
      <tr>
        <td> <label> Gambar </label></td>
        <td><input type="file" name="gambar" required onchange="previewImage()" class="gambar"></td>
      </tr>
      </tr>
      <tr>
        <td><img src="../assets/img/<?= $b['gambar']; ?>" width="120" style="display: block;" class="img-preview"></td>
      </tr>
    </table>
    <button type="submit" name="ubah" class="btn btn-primary btn-sm">Ubah Data!</button>
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
  <script src="../js/script/script.js"></script>
</body>

</html>