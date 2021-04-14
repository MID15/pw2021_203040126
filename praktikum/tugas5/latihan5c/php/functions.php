<?php

function koneksi()
{
    return mysqli_connect("localhost", "root", "", "pw_tubes_203040126", "3307");
}

function query($query)
{
    $conn = koneksi();
    $result = mysqli_query($conn, $query);

    // if (mysqli_num_rows($result) == 1) {
    //     return mysqli_fetch_assoc($result);
    // }

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function tambah($data)
{
    $conn = koneksi();

    $gambar = htmlspecialchars($data['gambar']);
    $judul = htmlspecialchars($data['judul']);
    $penulis = htmlspecialchars($data['penulis']);
    $penerbit = htmlspecialchars($data['penerbit']);
    $tahun = htmlspecialchars($data['tahun terbit']);
    $genre = htmlspecialchars($data['genre']);


    $query = "INSERT INTO
                buku
            VALUES
            (null, '$gambar','$judul', '$penulis', '$penerbit', '$tahun', '$genre')
          ";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
