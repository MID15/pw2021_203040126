<?php
    /*
    Mochamad Indra Wahyudi
    203040126
    github.com/MID15/pw2021_203040126
    Pertemuan 5 (11 Maret 2021)
    Materi minggu ini mempelajari mengenai array dalam PHP
    */
?>
<?php 
// Array = Variable yang dapat memiliki banyak nilai
// Elemen pada array boleh memiliki tipe data berbeda
// Pasangan antara key dan value
// key = index yang dimulai dari 0

// membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu");
// cara baru
$bulan = ["Januari", "Feburari", "Maret"];
$arr1 = [123, "tulisan", false];

// Menampilkan array
// var_dump() / print_r()
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";

// Menampilkan 1 elemen pada array
echo $arr1[0];
echo "<br>";
echo $bulan[1];

// Menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
echo "<br>";
var_dump($hari);
?>