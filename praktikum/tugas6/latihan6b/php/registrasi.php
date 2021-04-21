<?php
require 'functions.php';

if (isset($_POST['registrasi'])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
          alert('user berhasil ditambahkan');
          document.location.href = 'login.php';
          </script>";
  } else {
    echo "<script>
          alert('user gagal ditambahkan');
          document.location.href = 'login.php';
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <style>
    table {
      margin: 30px;
    }
  </style>

  <title>Registrasi</title>
</head>

<body>
  <form action="" method="POST">
    <table>
      <tr>
        <th>
          <h3>Form Registrasi</h3>
        </th>
      </tr>
      <tr>
        <td><label>Username</label></td>
        <td>:</td>
        <td><input type="text" name="username" autofocus autocomplete="off" required></td>
      </tr>
      <tr>
        <td><label>Password</label></td>
        <td>:</td>
        <td> <input type="password" name="password1" required></td>
      </tr>
      <tr>
        <td><label>Konfirmasi Password</label></td>
        <td>:</td>
        <td> <input type="password" name="password2" required></td>
      </tr>
      <tr>
        <td>
          <button type="submit" name="registrasi" class="btn btn-outline-primary btn-sm">Register</button>
        </td>
      </tr>
    </table>
  </form>







  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

</body>

</html>