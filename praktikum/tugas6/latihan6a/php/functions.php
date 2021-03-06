<?php

function koneksi()
{
    return mysqli_connect("localhost", "root", "", "pw_tubes_203040126", "3307");
}

function query($query)
{
    $conn = koneksi();
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        return mysqli_fetch_assoc($result);
    }

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}
function upload()
{
    $nama_file = $_FILES['gambar']['name'];
    $tipe_file = $_FILES['gambar']['type'];
    $ukuran_file = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmp_file = $_FILES['gambar']['tmp_name'];

    // ketika tidak ada gambar yang dipilih
    if ($error == 4) {
        // echo "<script>
        //       alert('gambar wajib dipilih');
        //       </script>";
        return 'nophoto.jpg';
    }

    // cek ekstensi file
    $daftar_gambar = ['jpg', 'jpeg', 'png'];
    $ekstensi_file = explode('.', $nama_file);
    $ekstensi_file = strtolower(end($ekstensi_file));
    if (!in_array($ekstensi_file, $daftar_gambar)) {
        echo "<script>
          alert('yang anda pilih bukan gambar');
          </script>";
        return false;
    }

    // cek type file
    if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
        echo "<script>
          alert('yang anda pilih bukan gambar');
          </script>";
        return false;
    }

    // cek ukuran file
    // maks 5mb = 5000000 byte
    if ($ukuran_file > 5000000) {
        echo "<script>
        alert('ukuran file terlalu besar');
        </script>";
        return false;
    }

    // lolos pengecekan
    // generate nama file baru
    $nama_file_baru = uniqid();
    $nama_file_baru .= '.';
    $nama_file_baru .= $ekstensi_file;
    move_uploaded_file($tmp_file, '../assets/img/' . $nama_file_baru);

    return $nama_file_baru;
}
function tambah($data)
{
    $conn = koneksi();

    $gambar = upload();
    $judul = htmlspecialchars($data['judul']);
    $penulis = htmlspecialchars($data['penulis']);
    $penerbit = htmlspecialchars($data['penerbit']);
    $tahun = htmlspecialchars($data['tahun']);
    $genre = htmlspecialchars($data['genre']);


    $query = "INSERT INTO
                buku
            VALUES
            (null, '$gambar','$judul', '$penulis', '$penerbit', '$tahun', '$genre')
          ";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM buku WHERE id = $id") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();

    $id = ($data['id']);
    $gambar = upload();
    $judul = htmlspecialchars($data['judul']);
    $penulis = htmlspecialchars($data['penulis']);
    $penerbit = htmlspecialchars($data['penerbit']);
    $tahun = htmlspecialchars($data['tahun']);
    $genre = htmlspecialchars($data['genre']);

    $query = "UPDATE buku SET
            gambar = '$gambar',
            judul = '$judul',
            penulis = '$penulis',
            penerbit = '$penerbit',
            tahun = '$tahun',
            genre = '$genre'
            WHERE id = $id";

    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $conn = koneksi();

    $query = "SELECT * FROM buku
            WHERE 
            judul LIKE '%$keyword%' OR 
            penulis LIKE '%$keyword%' OR 
            genre LIKE '%$keyword%'";
    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function login($data)
{
    $conn = koneksi();

    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);

    if ($user = query("SELECT * from user WHERE username ='$username' && password = '$password'")) {
        // set session
        $_SESSION['login'] = true;

        header("Location: admin.php");
        exit;
    }
    return [
        'error' => true,
        'pesan' => 'Username / password salah'
    ];
}
