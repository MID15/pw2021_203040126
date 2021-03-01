<?php
    /*
    Mochamad Indra Wahyudi
    203040126
    github.com/MID15/pw2021_203040126
    Pertemuan 4 (1 Maret 2021)
    Materi minggu ini mempelajari mengenai function dalam PHP
    */
?>
<?php
    // Built-In Functuion
    // Fungsi date/time: time(), date(), mktime(), strtotime()

    // Date: untuk menampilkan tanggal dengan format tertentu
    echo date("l, d-M-Y");

    // Time
    // UNIX Timestamp / EPOCH time
    // detik yang sudah berlalu sejak 1 januari 1970
    echo time();
    echo date("l", time()+60*60*24*100);

    // mktime
    // membuat sendiri detik yang sudah berlalu
    // mktime(x,x,x,x,x,x)
    // jam, menit, detik, bulan, tanggal, tahun
    echo date ("l", mktime(0,0,0,5,15,2002));

    // strtotime
    echo date ("l", strtotime("25 aug 1985"));

    // Fungsi 
        // String: 
        // strlen(): Untuk menghitung panjang dari sebuah string
        // strcmp(): Untuk membandingkan dua buah string
        // explode(): Untuk memecah string menjadi array
        // htmlspecialchars(): Untuk menjaga website dari orang yang iseng mau masuk web
    // Utility: 
        // var_dump(): Untuk mencetak isi dari sebuah variabel, array, object
        // isset(): Untuk mengecek apakah sebuah variabel sudah dibikin apa belum, menghasilkan nilai boolean
        // empty(): Mengecek apakah sebuah variabel ada isinya atau tidak
        // die(): Untuk memberhentikan program
        // sleep(): Untuk memberhentikan sementara baris kode
    ?>